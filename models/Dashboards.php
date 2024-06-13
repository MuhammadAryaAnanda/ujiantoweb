<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Dashboards extends Model {
    
    public static function countMentors() {
        return (new \yii\db\Query())
            ->from('mentors')
            ->count();
    }

    public static function countStudents() {
        return (new \yii\db\Query())
            ->from('students')
            ->count();
    }

    public static function countQuestions() {
        return (new \yii\db\Query())
            ->from('questions')
            ->count();
    }

    public static function countBidangs() {
        return (new \yii\db\Query())
            ->from('bidangs')
            ->count();
    }

    public static function countJurusans() {
        return (new \yii\db\Query())
            ->from('jurusans')
            ->count();
    }
}
?>
