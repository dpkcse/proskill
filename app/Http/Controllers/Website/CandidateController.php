<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CandidateAble;
use App\Http\Traits\CandidateSkillAble;
use App\Http\Traits\HasCandidateResume;
use App\Models\AppliedJob;
use App\Models\Candidate;
use App\Models\CandidateLanguage;
use App\Models\CandidateResume;
use App\Models\Company;
use App\Models\SearchCountry;
use App\Models\ContactInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\JobRole;
use App\Models\JobCategory;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\EducationInstitution;
use App\Models\CandidateEducation;
use App\Services\Website\Candidate\CandidateSettingUpdateService;
use App\Services\Website\Candidate\DashboardService;
use Illuminate\Http\Request;
use Modules\CandidatePlan\Entities\CandidatePlan;
use Modules\Faq\Entities\Faq;

class CandidateController extends Controller
{
    use CandidateAble, CandidateSkillAble, HasCandidateResume;

    public function __construct()
    {
        $this->middleware('access_limitation')->only([
            'settingUpdate',
        ]);
    }

    /**
     * Candidate dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        try {
            $data = (new DashboardService)->execute();

            return view('frontend.pages.candidate.dashboard', $data);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate notification page
     *
     * @return \Illuminate\Http\Response
     */
    public function allNotification()
    {
        try {
            $notifications = auth()
                ->user()
                ->notifications()
                ->paginate(12);

            return view('frontend.pages.candidate.all-notification', compact('notifications'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate job alert page
     *
     * @return \Illuminate\Http\Response
     */
    public function jobAlerts()
    {
        try {
            $notifications = auth()
                ->user()
                ->notifications()
                ->where('type', 'App\Notifications\Website\Candidate\RelatedJobNotification')
                ->paginate(12);

            return view('frontend.pages.candidate.job-alerts', compact('notifications'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate applied job page
     *
     * @return \Illuminate\Http\Renderable
     */
    public function appliedjobs(Request $request)
    {
        try {
            $candidate = Candidate::where('user_id', auth()->id())->first();
            if (empty($candidate)) {
                $candidate = new Candidate;
                $candidate->user_id = auth()->id();
                $candidate->save();
            }

            $resumes = CandidateResume::where('candidate_id', $candidate->id)->get();
            $applied_jobs = AppliedJob::with('applicationGroup:id,name')
                ->where('candidate_id', $candidate->id)
                ->get();

            $appliedJobs = $candidate
                ->appliedJobs()
                ->paginate(8)
                ->through(function ($application) use ($applied_jobs, $resumes) {
                    $application_group = $applied_jobs->where('job_id', $application->id)->first();
                    $resume = $resumes->where('id', $application_group->candidate_resume_id)->first();
                    $application->application_status = $application_group->applicationGroup->name;
                    $application->cover_letter = $application_group->cover_letter;
                    $application->cv_file = $resume ? $resume->file : '';
                    $application->cv_name = $resume ? $resume->name : '';

                    return $application;
                });

            return view('frontend.pages.candidate.applied-jobs', compact('appliedJobs'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate bookmark page
     *
     * @return \Illuminate\Http\Response
     */
    public function bookmarks(Request $request)
    {
        try {
            $candidate = Candidate::where('user_id', auth()->id())->first();
            if (empty($candidate)) {
                $candidate = new Candidate;
                $candidate->user_id = auth()->id();
                $candidate->save();
            }

            $jobs = $candidate
                ->bookmarkJobs()
                ->withCount([
                    'appliedJobs as applied' => function ($q) use ($candidate) {
                        $q->where('candidate_id', $candidate->id);
                    },
                ])
                ->paginate(12);

            if (auth('user')->check() && authUser()->role == 'candidate') {
                $resumes = currentCandidate()->resumes;
            } else {
                $resumes = [];
            }

            return view('frontend.pages.candidate.bookmark', compact('jobs', 'resumes'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate bookmark company toggle
     *
     * @return \Illuminate\Http\Response
     */
    public function bookmarkCompany(Company $company)
    {
        try {
            $company->bookmarkCandidateCompany()->toggle(currentCandidate());

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate settings page
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        try {
            $candidate = auth()->user()->candidate;

            if (empty($candidate)) {
                Candidate::create(['user_id' => auth()->id()]);
            }

            // for contact
            $contactInfo = ContactInfo::where('user_id', auth()->id())->first();
            $contact = [];
            if ($contactInfo) {
                $contact = $contactInfo;
            } else {
                $contact = '';
            }

            // for social link
            $socials = auth()->user()->socialInfo;
            // for extracurricular link
            $extracurriculars = auth()->user()->extracurricularInfo;

            // for candidate resume/cv
            $resumes = $candidate->resumes;

            $job_roles = JobRole::all()->sortBy('name');
            $experiences = Experience::all();
            $educations = Education::all();
            $professions = Profession::all()->sortBy('name');
            $skills = Skill::all()->sortBy('name');
            $job_categories = JobCategory::all()->sortBy('name');
            $languages = CandidateLanguage::all(['id', 'name']);
            // দেশগুলো নাম অনুযায়ী alphabetical order এ
            $countries = SearchCountry::orderBy('name', 'asc')->get();
            $candidate->load('skills', 'languages', 'experiences', 'educations.skills', 'experienceSkills.category', 'experienceSkills.skill', 'jobRoleAlerts:id,candidate_id,job_role_id');

            $institutions = EducationInstitution::orderBy('name', 'asc')->get();

            return view('frontend.pages.candidate.setting', [
                'candidate' => $candidate->load('skills', 'languages'),
                'contact' => $contact,
                'socials' => $socials,
                'extracurriculars' => $extracurriculars,
                'job_roles' => $job_roles,
                'experiences' => $experiences,
                'educations' => $educations,
                'professions' => $professions,
                'resumes' => $resumes,
                'skills' => $skills,
                'job_categories' => $job_categories,
                'candidate_languages' => $languages,
                'countries'=>$countries,
                'institutions' => $institutions,
            ]);
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate setting update
     *
     * @return \Illuminate\Http\Response
     */
    public function settingUpdate(Request $request)
    {
        try {
            (new CandidateSettingUpdateService)->update($request);

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Candidate username update
     *
     * @return \Illuminate\Http\Response
     */
    public function usernameUpdate(Request $request)
    {
        try {
            $request->session()->put('type', 'account');

            if ($request->type == 'candidate_username') {
                $request->validate([
                    'username' => 'required|unique:users,username,'.auth()->user()->id,
                ]);

                authUser()->update([
                    'username' => $request->username,
                ]);

                flashSuccess(__('username_updated_successfully'));

                return back();
            }
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    public function pricing()
    {
        try {
            abort_if(auth('user')->check() && authUser()->role == 'candidate', 404);
            $plans = CandidatePlan::active()->get();
            $plan_descriptions = $plans->pluck('descriptions')->flatten();

            $current_language = currentLanguage();
            $current_currency = currentCurrency();
            $current_language_code = $current_language ? $current_language->code : config('templatecookie.default_language');
            $faqs = Faq::where('code', currentLangCode())
                ->with('faq_category')
                ->whereHas('faq_category', function ($query) {
                    $query->where('name', 'Plan');
                })
                ->get();

            return view('frontend.pages.pricing', compact('plans', 'faqs', 'current_language', 'plan_descriptions', 'current_currency', 'current_language_code'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    public function educationStore(Request $request)
    {
        $request->session()->put('type', 'education');

        $data = $request->validate([
            'is_institute_accredited'   => ['nullable', 'in:0,1'],
            'exam_name'                 => ['required', 'string', 'max:255'],
            'degree_name'               => ['nullable', 'string', 'max:255'],
            'major_subject'             => ['nullable', 'string', 'max:255'],
            'education_institution_id'  => ['required', 'integer'],
            'passing_year'              => ['nullable', 'digits:4'],
            'result'                    => ['nullable', 'string', 'max:255'],
            'board'                     => ['nullable', 'string', 'max:255'],
            'skills'                    => ['nullable', 'array'],
            'skills.*'                  => ['integer'],
        ]);

        return DB::transaction(function () use ($data) {

            $instName = EducationInstitution::where('id', $data['education_institution_id'])->value('name');

            $education = CandidateEducation::create([
                'candidate_id'             => currentCandidate()->id,

                'exam_name'                => $data['exam_name'],
                'degree_name'              => $data['degree_name'] ?? null,
                'major_subject'            => $data['major_subject'] ?? null,
                'education_institution_id' => $data['education_institution_id'],
                'institute_name'           => $instName,
                'passing_year'             => $data['passing_year'] ?? null,
                'result'                   => $data['result'] ?? null,
                'board'                    => $data['board'] ?? null,
                'is_institute_accredited'  => $data['is_institute_accredited'] ?? null,

                // আপনার পুরনো কলাম থাকলে রাখবেন, না থাকলে remove করবেন
                'level'                    => $data['exam_name'],
                'degree'                   => $data['degree_name'] ?? $data['exam_name'],
                'year'                     => (int)($data['passing_year'] ?? 0),
            ]);

            $education->skills()->sync($data['skills'] ?? []);

            return back()->with('success', __('Education added successfully'));
        });
    }

    public function educationUpdate(Request $request)
    {
        $request->session()->put('type', 'education');

        $data = $request->validate([
            'education_id'              => ['required', 'integer'],

            'is_institute_accredited'   => ['nullable', 'in:0,1'],
            'exam_name'                 => ['required', 'string', 'max:255'],
            'degree_name'               => ['nullable', 'string', 'max:255'],
            'major_subject'             => ['nullable', 'string', 'max:255'],
            'education_institution_id'  => ['required', 'integer'],
            'passing_year'              => ['nullable', 'digits:4'],
            'result'                    => ['nullable', 'string', 'max:255'],
            'board'                     => ['nullable', 'string', 'max:255'],
            'skills'                    => ['nullable', 'array'],
            'skills.*'                  => ['integer'],
        ]);

        return DB::transaction(function () use ($data) {

            $education = CandidateEducation::where('id', $data['education_id'])
                ->where('candidate_id', currentCandidate()->id)
                ->firstOrFail();

            $instName = EducationInstitution::where('id', $data['education_institution_id'])->value('name');

            $education->update([
                'exam_name'                => $data['exam_name'],
                'degree_name'              => $data['degree_name'] ?? null,
                'major_subject'            => $data['major_subject'] ?? null,
                'education_institution_id' => $data['education_institution_id'],
                'institute_name'           => $instName,
                'passing_year'             => $data['passing_year'] ?? null,
                'result'                   => $data['result'] ?? null,
                'board'                    => $data['board'] ?? null,
                'is_institute_accredited'  => $data['is_institute_accredited'] ?? null,

                // legacy থাকলে রাখবেন
                'level'                    => $data['exam_name'],
                'degree'                   => $data['degree_name'] ?? $data['exam_name'],
                'year'                     => (int)($data['passing_year'] ?? 0),
            ]);

            $education->skills()->sync($data['skills'] ?? []);

            return back()->with('success', __('Education updated successfully'));
        });
    }

    public function educationDelete(CandidateEducation $education)
    {
        $requestType = request()->session()->put('type', 'education');

        // candidate ownership check
        if ($education->candidate_id !== currentCandidate()->id) {
            abort(403);
        }

        $education->skills()->detach();
        $education->delete();

        return back()->with('success', __('Education deleted successfully'));
    }

}
