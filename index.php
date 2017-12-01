<?php
    //session_start();
    //session_destroy();
    
    //ini_set('session.cookie_lifetime',36000);
    //$currentTimeoutInsecs = ini_get('session.gc_maxlifetime');
    //print_r($currentTimeoutInsecs);
    ini_set('session.gc_maxlifetime', 36000);
    ini_set('session.gc_probability', 1);
    ini_set('session.gc_divisor', 1);
    $sessionCookieExpireTime = 8*60*60;
    session_set_cookie_params($sessionCookieExpireTime);
    
    //$currentTimeoutInsecs = ini_get('session.gc_maxlifetime');
    //print_r($currentTimeoutInsecs);

    
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>NINA evaluation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style_new.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<?php

	$_SESSION['time_start'] = (double)microtime(true);	
	$_SESSION['n_click'] = 0;
	unset($_SESSION['data']);
	$_SESSION['data'] = array();
	
	unset($_SESSION['data_click']);
	$_SESSION['data_click'] = array();
	
	unset($_SESSION['data_question']);
	$_SESSION['data_question'] = array();
	
	#unset($_SESSION['data_question_nb_evaluation']);
	#$_SESSION['data_question_nb_evaluation'] = array();

?>
	<h1>Evaluation du comportement multimodal du robot NINA</h1>
	<h2 align = "center">Duc-Canh Nguyen, Frédéric Elisei & Gérard Bailly</h2>
	<h3 align = "center">Email: {prenom.nom}@gipsa-lab.grenoble-inp.fr</h3>
	<div class="wrapper" >

		<form class="formID" name="loginform" action="./about.php?" method="POST" style="width: 1000px ;margin-left: auto ;margin-right: auto ;">
		<table  align = "center" width = "1000" height = "200">
			<tr>
				<td style="font-size:5" align = "center" colspan = "2">
					Pour commencer, merci de remplir les informations suivantes, que nous garderons évidemment confidentielles.
				</td>
			</tr>
			<tr>
				<td style="font-size:4" align = "center">
						<br>Nom :</br>
						<input type="text" name="username" value="" size="24" required />
				</td>
				<td style="font-size:4" align = "center">
					Age : 
					<select name="age" style="font-size:4" required>
						<option value="1">15</option>
						<option value="2">16</option>
						<option value="3">17</option>
						<option value="4">18</option>
						<option value="5">19</option>
						<option value="6">20</option>
						<option value="7">21</option>
						<option value="8">22</option>
						<option value="9">23</option>
						<option value="10">24</option>
						<option value="11">25</option>
						<option value="12">26</option>
						<option value="13">27</option>
						<option value="14">28</option>
						<option value="15">29</option>
						<option value="16">30</option>
						<option value="17">31</option>
						<option value="18">32</option>
						<option value="19">33</option>
						<option value="20">34</option>
						<option value="21">35</option>
						<option value="22">36</option>
						<option value="23">37</option>
						<option value="24">38</option>
						<option value="25">39</option>
						<option value="26">40</option>
						<option value="27">41</option>
						<option value="28">42</option>
						<option value="29">43</option>
						<option value="30">44</option>
						<option value="31">45</option>
						<option value="32">46</option>
						<option value="33">47</option>
						<option value="34">48</option>
						<option value="35">49</option>
						<option value="36">50</option>
						<option value="37">51</option>
						<option value="38">52</option>
						<option value="39">53</option>
						<option value="40">54</option>
						<option value="41">55</option>
						<option value="42">56</option>
						<option value="43">57</option>
						<option value="44">58</option>
						<option value="45">59</option>
						<option value="46">60</option>
						<option value="47">61</option>
						<option value="48">62</option>
						<option value="49">63</option>
						<option value="50">64</option>
						<option value="51">65</option>
						<option value="52">66</option>
						<option value="53">67</option>
						<option value="54">68</option>
						<option value="55">69</option>
						<option value="56">70</option>
						<option value="57">71</option>
						<option value="58">72</option>
						<option value="59">73</option>
						<option value="60">74</option>
						<option value="61">75</option>
						<option value="62">76</option>
						<option value="63">77</option>
						<option value="64">78</option>
						<option value="65">79</option>
						<option value="66">80</option>
						<option value="67">81</option>
						<option value="68">82</option>
						<option value="69">83</option>
						<option value="70">84</option>
						<option value="71">85</option>
						<option value="72">86</option>
						<option value="73">87</option>
						<option value="74">88</option>
						<option value="75">89</option>
						<option value="76">90</option>
						<option value="77">91</option>
						<option value="78">92</option>
						<option value="79">93</option>
						<option value="80">94</option>	
						<option value="81">95</option>						
					</select>
				</td>
			</tr>
			<tr>
				<td style="font-size:4" align = "center">
					Sexe : 
						<select name="sex" style="font-size:4" required>
						  <option value="1">Homme</option>
						  <option value="2">Femme</option>
						</select>

				</td>
				<td style="font-size:4" align = "center">
						Langue maternelle :
						<select name="language" style="font-size:4" required>
						  <option value="1">Français</option>
						  <option value="2">Autre</option>
						</select>
				</td>
			</tr>
			<tr>
				<td colspan = "2" valign = "top">
					<div>
						<input class="btn" type="submit" value="Valider" />
					</div>	
				</td>
			</tr>

		</table>
	
		</form>
	</div>
	
	
</body>
</html>
