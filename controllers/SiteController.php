<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ExamResults;
use app\models\Exams;
use app\models\QuizResult;
use webvimark\modules\UserManagement\models\User;
use yii\db\Expression;
use yii\db\Query;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            'ghost-access'=> [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $studentId = 7;

        // Get the first exam result (exam ID 1)
        $examId1 = 1;
        $checkujian = (new \yii\db\Query())
            ->select('*')
            ->from('exam_results')
            ->where(['student_id' => $studentId, 'exam_id' => $examId1])
            ->one();

        // Get the second exam result (exam ID 2)
        $examId2 = 2;
        $checkujian2 = (new \yii\db\Query())
            ->select('*')
            ->from('exam_results')
            ->where(['student_id' => $studentId, 'exam_id' => $examId2])
            ->one();

        return $this->render('index', [
            'checkujian' => $checkujian,
            'checkujian2' => $checkujian2,
        ]);
    }




    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionGagal()
    {
        return $this->render('gagal');
    }

    public function actionRegister()
    {
        return $this->render('register');
    }

    public function actionNewlogin()
    {
        return $this->render('newlogin');
    }

    public function actionTemplatequiz()
    {
        return $this->render('templatequiz');
    }

    public function actionWebvimark()
    {
        return $this->render('webvimark');
    }



    public function actionNewcontact()
    {
        return $this->render('newcontact');
    }

    public function actionSubmitquiz($quiz)
    {
        $connection = Yii::$app->getDb();
        $studentId = User::getCurrentUser($fromSingleton = true)['id'];
        var_dump($_POST);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["status"] == "selesai") {
                if ($_POST["jawaban"]) {
                    $select = $_POST["jawaban"];
                    for ($i = 0; $i < count($select); $i++) {
                        $sql =  "INSERT INTO quiz_results (student_id, answers_id) VALUES (:studentId, :answers_id)";
                        $command = $connection->createCommand($sql);

                        // Bind the parameters
                        $command->bindValues([
                            ':studentId' => $studentId,
                            ':answers_id' => $select[$i],
                        ]);
                        $command->execute();
                    }
                }
                if ($_POST["soalessay"]) {
                    $soal = $_POST["soalessay"];
                    $jawaban = $_POST["jawaban_essay"];
                    for ($i = 0; $i < count($jawaban); $i++) {
                        $sql = "INSERT INTO essay_answers (student_id, question_id, jawaban, nilai, komentar) VALUES (:studentId, :questionId, :answer, null, null)";
                        $command = $connection->createCommand($sql);

                        // Bind the parameters
                        $command->bindValues([
                            ':studentId' => $studentId,
                            ':questionId' => $soal[$i],
                            ':answer' => $jawaban[$i],
                        ]);
                        $command->execute();
                    }
                }
                $sql = "UPDATE exam_results SET waktu_selesai = '00:00:00' WHERE id =" . $_POST["idquiz"];
                $command = $connection->createCommand($sql);
                $command->execute();

                $benar = (new Query())
                    ->from('quiz_results qr')
                    ->innerJoin('answers a', 'qr.answers_id = a.id')
                    ->where(['a.benar' => 1, 'qr.student_id' => $studentId, 'a.question_id' => $quiz])
                    ->count();
                $skor_pilgan = $benar * 10;
                Yii::$app->db->createCommand()
                    ->update('exam_results', ['skor_pilgan' => $skor_pilgan, 'jlh_benar_pilgan' => $benar], ['student_id' => $studentId, 'exam_id' => $quiz])
                    ->execute();
            } else {
                $sql = "UPDATE exam_results SET waktu_selesai = '00:00:00' WHERE id =" . $_POST["idquiz"];
                $command = $connection->createCommand($sql);
                $command->execute();
            }

            return $this->redirect('/site');
        }
    }

    //     public function actionSubmittps()
    // {
    //     $connection = Yii::$app->getDb();
    //     $studentId = 7;

    //     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //         if ($_POST["status"] == "selesai") {
    //             if ($_POST["jawaban"]) {
    //                 $select = $_POST["jawaban"];
    //                 for ($i = 0; $i < count($select); $i++) {
    //                     $sql =  "INSERT INTO quiz_results (student_id, answers_id) VALUES (:studentId, :answers_id)";
    //                     $command = $connection->createCommand($sql);

    //                     // Bind the parameters
    //                     $command->bindValues([
    //                         ':studentId' => $studentId,
    //                         ':answers_id' => $select[$i],
    //                     ]);
    //                     $command->execute();
    //                 }
    //             }
    //             if ($_POST["soalessay"]) {
    //                 $soal = $_POST["soalessay"];
    //                 $jawaban = $_POST["jawaban_essay"];
    //                 for ($i = 0; $i < count($jawaban); $i++) {
    //                     $sql = "INSERT INTO essay_answers (student_id, question_id, jawaban, nilai, komentar) VALUES (:studentId, :questionId, :answer, null, null)";
    //                     $command = $connection->createCommand($sql);

    //                     // Bind the parameters
    //                     $command->bindValues([
    //                         ':studentId' => $studentId,
    //                         ':questionId' => $soal[$i],
    //                         ':answer' => $jawaban[$i],
    //                     ]);
    //                     $command->execute();
    //                 }
    //             }
    //             $sql = "UPDATE exam_results SET waktu_selesai = '00:00:00' WHERE id =" . $_POST["idquiz"];
    //             $command = $connection->createCommand($sql);
    //             $command->execute();

    //             $benar = (new Query())
    //                 ->from('quiz_results qr')
    //                 ->innerJoin('answers a', 'qr.answers_id = a.id')
    //                 ->where(['a.benar' => 1, 'qr.student_id' => 7])
    //                 ->count();
    //             $skor_pilgan = $benar * 10;
    //             Yii::$app->db->createCommand()
    //                 ->update('exam_results', ['skor_pilgan' => $skor_pilgan, 'jlh_benar_pilgan' => $benar], ['student_id' => 7])
    //                 ->execute();
    //         } else {
    //             // Handle case when exam is not completed
    //             $sql = "UPDATE exam_results SET waktu_selesai = '00:00:00' WHERE id =" . $_POST["idtps"];
    //             $command = $connection->createCommand($sql);
    //             $command->execute();
    //         }

    //         // Redirect back to the appropriate page
    //         return $this->redirect(['/site']);
    //     }
    // }
    public function actionGetwaktu($id)
    {
        $connection = Yii::$app->getDb();
        $model = ExamResults::findOne($id);
        $sql = "UPDATE exam_results SET waktu_selesai = DATE_SUB(waktu_selesai, INTERVAL 1 SECOND) WHERE id = :id";
        $command = $connection->createCommand($sql);

        //                     // Bind the parameters
        $command->bindValues([
            ':id' => $id, 
        ]);
        $command->execute();
        // if ($model !== null) {
        //     $model->waktu_selesai = new Expression('DATE_SUB(waktu_selesai, INTERVAL 1 SECOND)');
        //     $model->save();
        // }
        $model = ExamResults::findOne($id);
        return $model->waktu_selesai;
    }
    public function actionQuiz($quiz)
    {
        $connection = Yii::$app->getDb();
        $studentId = User::getCurrentUser($fromSingleton = true)['id'];
        $examId = $quiz;
        // TPA Questions and Answers
        $commandTpa = $connection->createCommand("
            SELECT q.*
            FROM questions q
            INNER JOIN exams e ON q.exam_id = e.id
            WHERE e.id = :idexam;
        ");
        $commandTpa->bindValues([
            ':idexam' => $examId
        ]);

        $commandTpa2 = $connection->createCommand("
            SELECT a.*
            FROM answers a
            INNER JOIN questions q ON a.question_id = q.id;
        ");

        $tpa = $commandTpa->queryAll();
        $pilgan1 = $commandTpa2->queryAll();

        $combined = array();

        foreach ($tpa as $q) {
            $answers = array();
            foreach ($pilgan1 as $a) {
                if ($a['question_id'] == $q['id']) {
                    $answers[] = $a;
                }
            }
            $q['answers'] = $answers;
            $combined[] = $q;
        }

        // Student ID and Exam ID
    

        // Check for existing exam result
        $check = (new \yii\db\Query())
            ->select('*')
            ->from('exam_results')
            ->where(['student_id' => $studentId, 'exam_id' => $examId])
            ->one();

        if ($check !== false) {
            if ($check['waktu_selesai'] === '00:00:00') {
                return $this->redirect(['/']);
            }
        } else {
            // Get the duration of the exam
            $getwaktu = (new \yii\db\Query())
                ->select('durasi_pengerjaan_ujian')
                ->from('exams')
                ->where(['id' => $examId])
                ->one();

            if ($getwaktu) {
                $durasiPengerjaanUjian = $getwaktu['durasi_pengerjaan_ujian'];

                // Generate a unique ID for the new exam result
                $bikinid = (new \yii\db\Query())
                    ->select('MAX(id) + 1 AS id')
                    ->from('exam_results')
                    ->scalar();

                // Insert new exam result
                $sql = "INSERT INTO exam_results (id, exam_id, student_id, skor, waktu_selesai) VALUES (:id, :exam_id, :student_id, 0, :waktu_selesai)";
                $command = $connection->createCommand($sql);
                $command->bindValue(':id', $bikinid);
                $command->bindValue(':exam_id', $examId);
                $command->bindValue(':student_id', $studentId);
                $command->bindValue(':waktu_selesai', $durasiPengerjaanUjian);
                $command->execute();
            }

            $data = (new \yii\db\Query())
                ->select('*')
                ->from('exam_results')
                ->where(['student_id' => $studentId, 'exam_id' => $examId])
                ->one();

            return $this->render('quiz', [
                'combined' => $combined,
                'data' => $data,
            'quiz' => $quiz

            ]);
        }

        $data = (new \yii\db\Query())
            ->select('*')
            ->from('exam_results')
            ->where(['student_id' => $studentId, 'exam_id' => $examId])
            ->one();

        return $this->render('quiz', [
            'combined' => $combined,
            'data' => $data,
            'quiz' => $quiz
        ]);
    }


    public function actionTps()
    {
        $connection = Yii::$app->getDb();

        // TPS Questions and Answers
        $commandTps = $connection->createCommand("
        SELECT q.*
        FROM questions q
        INNER JOIN exams e ON q.exam_id = e.id
        WHERE e.id = 2;
    ");

        $commandTps2 = $connection->createCommand("
        SELECT a.*
        FROM answers a
        INNER JOIN questions q ON a.question_id = q.id;
    ");

        $tps = $commandTps->queryAll();
        $pilgan2 = $commandTps2->queryAll();

        $combined2 = array();

        foreach ($tps as $q) {
            $answers = array();
            foreach ($pilgan2 as $a) {
                if ($a['question_id'] == $q['id']) {
                    $answers[] = $a;
                }
            }
            $q['answers'] = $answers;
            $combined2[] = $q;
        }

        // Student ID and Exam ID
        $studentId = 7;
        $examId = 2;

        // Check for existing exam result
        $check = (new \yii\db\Query())
            ->select('*')
            ->from('exam_results')
            ->where(['student_id' => $studentId, 'exam_id' => $examId])
            ->one();

        if ($check !== false) {
            if ($check['waktu_selesai'] === '00:00:00') {
                return $this->redirect(['/']);
            }
        } else {
            // Get the duration of the exam
            $getwaktu = (new \yii\db\Query())
                ->select('durasi_pengerjaan_ujian')
                ->from('exams')
                ->where(['id' => $examId])
                ->one();

            if ($getwaktu) {
                $durasiPengerjaanUjian = $getwaktu['durasi_pengerjaan_ujian'];

                // Generate a unique ID for the new exam result
                $bikinid = (new \yii\db\Query())
                    ->select('MAX(id) + 1 AS id')
                    ->from('exam_results')
                    ->scalar();

                // Insert new exam result
                $sql = "INSERT INTO exam_results (id, exam_id, student_id, skor, waktu_selesai) VALUES (:id, :exam_id, :student_id, 0, :waktu_selesai)";
                $command = $connection->createCommand($sql);
                $command->bindValue(':id', $bikinid);
                $command->bindValue(':exam_id', $examId);
                $command->bindValue(':student_id', $studentId);
                $command->bindValue(':waktu_selesai', $durasiPengerjaanUjian);
                $command->execute();
            }

            $data = (new \yii\db\Query())
                ->select('*')
                ->from('exam_results')
                ->where(['student_id' => $studentId, 'exam_id' => $examId])
                ->one();

            return $this->render('tps', [
                'combined2' => $combined2,
                'data' => $data
            ]);
        }
    }


    public function actionForgot()
    {
        return $this->render('forgot');
    }
}
