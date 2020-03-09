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
use function GuzzleHttp\Promise\all;

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
        $user_id = session()->get('user_id');

        $personals = $this->getPersonals($user_id);

        $academics = $this->getAcademics($user_id);

        $expertise = $this->getExpertise($user_id);

        $bankAccounts = $this->getBankAccounts($user_id);

        $organizations = $this->getOrganizations($user_id);

        $positions = $this->getPositions($user_id);

        $achievements = $this->getAchievements($user_id);

        $employments = $this->getEmployments($user_id);

        $mentoring = $this->getMentoring($user_id);

        $families = $this->getFamilies($user_id);

        $educations = $this->getEducation($user_id);

        $trainings = $this->getTrainings($user_id);

        $social_accounts = $this->getSocialAccounts($user_id);

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

    public function getPersonals(int $id){
        return Personal::query()->where('user_id', $id)->first();
    }

    public function getAcademics(int $id){
        return Academic::query()->where('user_id', $id)->first();
    }

    public function getExpertise(int $id){
        return Expertise::query()->where('user_id', $id)->get();
    }

    public function getBankAccounts(int $id){
        return BankAccount::query()->where('user_id', $id)->get();
    }

    public function getOrganizations(int $id){
        return Organization::query()->where('user_id', $id)->get();
    }

    public function getPositions(int $id){
        return Position::query()->where('user_id', $id)->first();
    }

    public function getAchievements(int $id){
        return Achievement::query()->where('user_id', $id)->get();
    }

    public function getEmployments(int $id){
        return Employment::query()->where('user_id', $id)->get();
    }

    public function getMentoring(int $id){
        return Mentoring::query()->where('user_id', $id)->first();
    }

    public function getFamilies(int $id){
        return Family::query()->where('user_id', $id)->first();
    }

    public function getEducation(int $id){
        return Education::query()->where('user_id', $id)->get();
    }

    public function getTrainings(int $id){
        return Training::query()->where('user_id', $id)->get();
    }

    public function getSocialAccounts(int $id){
        return SocialAccount::query()->where('user_id', $id)->get();
    }
}
