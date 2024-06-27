<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use App\Models\CounselingDetail;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CounselingController extends Controller
{
    public function index(Counseling $counseling, User $user)
    {
        $data = $user->whereNot('is_admin', true)->with('counseling')->get();

        return Inertia::render('counseling/index', compact('data'));
    }

    public function userCounseling($id, Counseling $counseling)
    {
        $data = [
            'counseling' => $counseling->where('user_id', $id)->with('counselingDetail')->get(),
            'user' => User::find($id)
        ];

        return Inertia::render('counseling/counseling_user', compact('data'));
    }

    public function detail($id, $id_user , CounselingDetail $counselingDetail, Counseling $counseling){

        $data = [
            'user' => User::find($id_user),
            'counseling' => $counseling->where('id', $id)->first(),
            'counselingDetail' => $counselingDetail->where('counseling_id', $id)->with('question')->get()
        ];

        return Inertia::render('counseling/detail', compact('data'));
    }

    public function createPage(Question $question)
    {
        $data = [
            'question' => $question->all()
        ];

        return Inertia::render('counseling/create', compact('data'));
    }

    public function create(Request $request)
    {
        return Inertia::render('counseling/result');
    }

}
