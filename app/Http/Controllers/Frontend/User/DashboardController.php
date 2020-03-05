<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Profile\Academic;
use App\Models\Profile\Achievement;
use App\Models\Profile\BankAccount;
use App\Models\Profile\Education;
use App\Models\Profile\Employment;
use App\Models\Profile\Expertise;
use App\Models\Profile\Family;
use App\Models\Profile\Mentoring;
use App\Models\Profile\Organization;
use App\Models\Profile\Personal;
use App\Models\Profile\Position;
use App\Models\Profile\SocialAccount;
use App\Models\Profile\Training;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $personals = $this->getPersonals();

        $academics = $this->getAcademics();

        $expertise = $this->getExpertise();

        $bankAccounts = $this->getBankAccounts();

        $organizations = $this->getOrganizations();

        $positions = $this->getPositions();

        $achievements = $this->getAchievements();

        $employments = $this->getEmployments();

        $mentoring = $this->getMentoring();

        $families = $this->getFamilies();

        $educations = $this->getEducation();

        $trainings = $this->getTrainings();

        $social_accounts = $this->getSocialAccounts();

        return view('frontend.user.dashboard',
            [
                'personals'=>$personals,
                'academics'=>$academics,
                'bankAccounts'=>$bankAccounts,
                'organizations'=>$organizations,
                'achievements'=>$achievements,
                'employments'=>$employments,
                'expertise'=>$expertise,
                'positions'=>$positions,
                'mentoring'=>$mentoring,
                'families'=>$families,
                'educations'=>$educations,
                'social_accounts'=>$social_accounts,
                'trainings'=>$trainings,
            ]
        );
    }

    public function getPersonals(PersonalRepository $personalRepository){
        return Personal::all();
    }

    public function getAcademics(AcademicRepository $academicRepository){
        return Academic::all();
    }

    public function getExpertise(ExpertiseRepository $expertiseRepository){
        return Expertise::all();
    }

    public function getBankAccounts(BankAccountRepository $bankAccountRepository){
        return BankAccount::all();
    }

    public function getOrganizations(OrganizationRepository $organizationRepository){
        return Organization::all();
    }

    public function getPositions(PositionRepository $positionRepository){
        return Position::all();
    }

    public function getAchievements(AchievementRepository $achievementRepository){
        return Achievement::all();
    }

    public function getEmployments(EmploymentRepository $employmentRepository){
        return Employment::all();
    }

    public function getMentoring(MentoringRepository $mentoringRepository){
        return Mentoring::all();
    }

    public function getFamilies(FamilyRepository $familyRepository){
        return Family::all();
    }

    public function getEducation(EducationRepository $educationRepository){
        return Education::all();
    }

    public function getTrainings(TrainingRepository $trainingRepository){
        return Training::all();
    }

    public function getSocialAccounts(SocialAccountRepository $socialAccountRepository){
        return SocialAccount::all();
    }
}
