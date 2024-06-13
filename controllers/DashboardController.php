<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Students;
use app\models\Mentors;
use app\models\Jurusans;
use app\models\Dashboards;

class DashboardController extends Controller
{
    public function actionIndex()
    {   
        $mentorCount = Dashboards::countMentors();
        $studentCount = Dashboards::countStudents();
        $questionCount = Dashboards::countQuestions();
        $bidangCount = Dashboards::countBidangs();
        $jurusanCount = Dashboards::countJurusans();
        return $this->render('index', [
            'mentorCount' => $mentorCount,
            'studentCount' => $studentCount,
            'questionCount' => $questionCount,
            'bidangCount' => $bidangCount,
            'jurusanCount' => $jurusanCount,
        ]);
    }

    public function actionDua()
    {
        $mentor = Mentors::findOne(7);
        return $this->render('dua', [
            'mentor' => $mentor,    
        ]);
    }

    public function actionTiga()
    {
        return $this->render('tiga');
    }

    public function actionEmpat()
    {
        $student = Students::findOne(7);
        // var_dump($student);
        return $this->render('empat', [
            'student' => $student,    
        ]);
    }

    // public function actionEmpat()
    // {
    //     $students =[];
    //     return $this->render('empat', [
    //         'student' => $students,    
    //     ]);
    // }
}