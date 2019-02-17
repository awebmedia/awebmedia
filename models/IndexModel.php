<?php	namespace AVi\Model\Index;    
        use AVi\Dbase\customPDO;

	require_once ROOT.'/component/vendor/autoload.php';

	class IndexModel{
		function __construct(){ }
        public function sendMail($_){
            $pattern = array(
                1 => array(
                    'q' => "Наличие сайта",
                    1 => "Да",
                    2 => "Нет",
                ),
                2 => array(
                    'q' => "Тип сайт",
                    1 => "Сайт-визитка",
                    2 => "Промо-сайт",
                    3 => "Лендинг",
                    4 => "Корпоративный",
                    5 => "Интернет-магазин",
                    6 => "Агрегатор",
                    9 => "Неопределен",
                ), 
                3 => array(
                    'q' => "Для наполнеия сайта",
                    1 => "Текст",
                    2 =>  "Фото материалы или графика",
                    3 => "Видео материалы",

                ), 
                4 => array(
                    'q' => "Поддержка сайта",
                     1 => "Да",
                     2 => "Нет",
                     3 => "Затрудняюсь ответить",

                ), 
                5 => array(
                    'q' => "Хостинг и домен",                   
                    1 => "Да",
                    2 => "Хостинг",
                    3 => "Домен",
                    4 => "Нет",
                    5 => "Затрудняюсь ответить",
                ), 
                6 => array(
                    'q' => "Маркетинговое сопровождение",
                    1 => "Да",
                    2 => "Нет",
                    3 => "Объясните для чего это необходимо",

                ), 
            );            
            $q = $_[0];
            $table = "";            
            for($i=0; $i<count($q); $i++){                
                if((int)$q[$i]['t']==1){
                    $table .= "<tr><td class='a'>".$pattern[(int)$q[$i]['q']]['q']."</td><td class='b'>".$pattern[(int)$q[$i]['q']][(int)$q[$i]['a']]."</td></tr>";
                }
                if((int)$q[$i]['t']==2){
                    $aa = array();
                    if(empty($q[$i]['a'])){
                        $aa = "Ничего нет";
                    }else{
                        for($j=0; $j<count($q[$i]['a']); $j++){
                            $aa[] = $pattern[(int)$q[$i]['q']] [(int)$q[$i]['a'][$j]];
                        }
                        $aa = implode("<br>", $aa);
                    }                    
                    $table .= "<tr><td class='a'>".$pattern[(int)$q[$i]['q']]['q']."</td><td class='b'>".$aa."</td></tr>";
                }
            }            
            $table = "<table>$table</table>";            
            $name = $_[1]['name'];
            $email = $_[1]['email'];
            $phone_h = preg_replace ("/[^0-9\+]/Uu", "" , $_[1]['phone']);
            $phone = $_[1]['phone'];
			
            $html="<html>
            <head>
            <style>
            body{ font: 400 16px/1.2 'Raleway', sans-serif; text-align: center;  width:100%; background-color: #F2F2F2;}
            .wr-table{ width:451px; background-color: #333333; display: block; padding: 60px 40px 80px; margin: 0 auto;}
            table{ color: white; border-spacing: 0px; border-collapse: collapse; table-layout: auto; }
            tr{ border-bottom: 1px solid #FFD000; }
            td{ vertical-align: top; padding: 8px 8px; }
            td.a{ text-align: right; }
            td.b{ text-align: left; }
            .person{display: block; width:451px; padding: 60px 40px 60px; background-color: #FFD000; color: #111111; text-align: left;  margin: 0 auto}
            .person div{ height: 34px; line-height: 34px; text-align: left; font-size: 16px;}
			.person a, .person span{ font-size: 20px; }
            a{ color: #111111; text-decoration: underline; cursor: pointer; }
            .ticket{padding: 20px 0px 20px; position: relative; min-width: 580px; display:block; wigth:100%; background-color:#F2F2F2;}
            </style>
            </head>
            <body>
            <div class='ticket'>
            <div class='person'>
            <div>Имя: <span>$name</span></div>
            <div>Телефон:  <a href='tel:$phone_h'>$phone</a></div>
            <div>Email: <a href='mailto:$email'>$email</a></div>
            </div>
            <div class='wr-table'>
            $table
            </div>
            </div>
            </body>
            </html>";
            
            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            $mail->CharSet = 'utf-8';
            $mail->From = 'robot@awebmedia.ru';
            $mail->FromName = 'AWEBmedia';
            $mail->AddAddress('jarry.roxwell@gmail.com');
			if(!empty($email)) $mail->addReplyTo($email, $name);
            $mail->Subject = 'Заявка на расчет сайта';
            $mail->isHTML(true);
            $mail->Body = $html;
            if ( $mail->Send() ) return json_encode(array('code'=>1), true);
            else return json_encode(array('code'=>0), true);           
        }
    private $db=0;
}