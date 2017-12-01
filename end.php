<?php
    session_start();
    #array_push($_SESSION['data_question_nb_evaluation'],$_POST['Q10_mos']);
    $_SESSION['data_question_nb_evaluation'] = $_POST['Q10_mos'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Fin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style_new.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

<?php
	$output_filename = $_SESSION['username'];
	
	$output_filename = trim($output_filename,'"');
	$output_filename = $output_filename.'_'.$_SESSION['age'];
	$comment_filename = 'comment/'.$output_filename.'.comment';
 
	if (isset($_POST['submit'])) {
			
			$_SESSION['time_end'] = (double)microtime(true);
			$time_end = $_SESSION['time_end'] ;
			$time_start = $_SESSION['time_start'] ;
			$time_play =  $_SESSION['time_play'];
			$time_stop =  $_SESSION['time_stop'];
			$time_start_question = $_SESSION['time_start_question'];
			$data = $_SESSION['data'];     
			$data_question = $_SESSION['data_question'];

			$data_question_nb_evaluation  = $_SESSION['data_question_nb_evaluation'];
			$filename = 'data/data_name_log.txt';
			
			//print
			//print_r($my_array);			
			$data_filename = 'data/'.$output_filename.'.data';
			
			if(file_exists($data_filename))
			{
				$num_rand = rand(0, 10000);
				$output_filename = $output_filename.'_'.$num_rand;
				$comment_filename = 'comment/'.$output_filename.'.comment';
				$data_filename = 'data/'.$output_filename.'.data';
			}

			$fid_log_filename = fopen($filename,'a');
			fputs($fid_log_filename,"$data_filename\n");
			fclose($fid_log_filename); 
			
			if (!file_exists($data_filename))
			{
				$fid_data = fopen($data_filename,'w');
			}
			else{
				$fid_data = fopen($data_filename,'a');
			}
			
			
			foreach ($data as $line){
				fputcsv($fid_data,$line,',',' '); 
			}
			
			$text_ques = "rate ";
			foreach($data_question as $key => $value)
			{
				//$text_ques .= $key." ".$value."\n";
				$text_ques .= $value." ";
			}
			$text_ques .="\n";
			fwrite($fid_data, $text_ques) or die("Could not write file!");	
			fwrite($fid_data ,"nb_evaluation $data_question_nb_evaluation\n");
			fwrite($fid_data ,"time_start $time_start\n");
            fwrite($fid_data ,"time_end $time_end\n");   
            fwrite($fid_data ,"time_play $time_play\n"); 
            fwrite($fid_data ,"time_stop $time_stop\n");  
			fwrite($fid_data ,"time_start_question $time_start_question\n");  
			
			$data_click = $_SESSION['data_click']; 
			$text = "";
			foreach($data_click as $key => $value)
			{
				$text .= "enter_".$key." ".$value."\n";
			}
			$n_click = $_SESSION['n_click'];
			fwrite($fid_data, "num_press $n_click\n");
			//fwrite($fid_data, $text) or die("Could not write file!");
			if ($n_click > 0)
			{
				fwrite($fid_data, $text) or die("Could not write file!");
			}
			fclose($fid_data);
			
			if(isset($_POST['comment']))
			{
				$comment = $_POST['comment'];
				if (!file_exists($comment_filename))
				{
				$fid_comment = fopen($comment_filename,'w');
				}
				else{
				$fid_comment = fopen($comment_filename,'a');
				}
				foreach ($data as $line){
					fputcsv($fid_comment,$line,',',' '); 
				}
				fwrite($fid_comment ,"nb_evaluation $data_question_nb_evaluation\n");
				fputs($fid_comment,"$comment\n");
				fclose($fid_comment);
			}
		}
		else
		{//echo "didn't work";
		}

?>
<p>
Merci pour votre participation!
</p>	




    </body>
</html>

