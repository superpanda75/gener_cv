<?php
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jonathan Doe | Web Designer, Director | name@yourdomain.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
	<style type="text/css" media="all">
	.msg { padding: 10px; background: #222; position: relative; }
.msg h1 { color: #fff;  }
.msg a { margin-left: 20px; background: #408814; color: white; padding: 4px 8px; text-decoration: none; }
.msg a:hover { background: #266400; }

/* //-- yui-grids style overrides -- */
body { font-family: Georgia; color: #444; }
#inner { padding: 10px 80px; margin: 80px auto; background: #f5f5f5; border: solid #666; border-width: 8px 0 2px 0; }
.yui-gf { margin-bottom: 2em; padding-bottom: 2em; border-bottom: 1px solid #ccc; }

/* //-- header, body, footer -- */
#hd { margin: 2.5em 0 3em 0; padding-bottom: 1.5em; border-bottom: 1px solid #ccc }
#hd h2 { text-transform: uppercase; letter-spacing: 2px; }
#bd, #ft { margin-bottom: 2em; }

/* //-- footer -- */
#ft { padding: 1em 0 5em 0; font-size: 92%; border-top: 1px solid #ccc; text-align: center; }
#ft p { margin-bottom: 0; text-align: center;   }

/* //-- core typography and style -- */
#hd h1 { font-size: 48px; text-transform: uppercase; letter-spacing: 3px; }
h2 { font-size: 152% }
h3, h4 { font-size: 122%; }
h1, h2, h3, h4 { color: #333; }
p { font-size: 100%; line-height: 18px; padding-right: 3em; }
a { color: #990003 }
a:hover { text-decoration: none; }
strong { font-weight: bold; }
li { line-height: 24px; border-bottom: 1px solid #ccc; }
p.enlarge { font-size: 144%; padding-right: 6.5em; line-height: 24px; }
p.enlarge span { color: #000 }
.contact-info { margin-top: 7px; }
.first h2 { font-style: italic; }
.last { border-bottom: 0 }


/* //-- section styles -- */

a#pdf { display: block; float: left; background: #666; color: white; padding: 6px 50px 6px 12px; margin-bottom: 6px; text-decoration: none;  }
a#pdf:hover { background: #222; }

.job { position: relative; margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }
.job h4 { position: absolute; top: 0.35em; right: 0 }
.job p { margin: 0.75em 0 3em 0; }

.last { border: none; }
.skills-list {  }
.skills-list ul { margin: 0; }
.skills-list li { margin: 3px 0; padding: 3px 0; }
.skills-list li span { font-size: 152%; display: block; margin-bottom: -2px; padding: 0 }
.talent { width: 32%; float: left }
.talent h2 { margin-bottom: 6px; }

#srt-ttab { margin-bottom: 100px; text-align: center;  }
#srt-ttab img.last { margin-top: 20px }

/* --// override to force 1/8th width grids -- */
.yui-gf .yui-u{width:80.2%;}
.yui-gf div.first{width:12.3%;}
	</style>

</head>
<body>
<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>
						<?php echo $_SESSION['name']." ".$_SESSION['firstname']; ?>
					</h1>
					<h2>Developpeur</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a id="pdf" href="src/content/model3/cvfpdf.php">Générer le PDF</a></h3>
						<h3><a>téléphone : <?php echo $_SESSION['phone']." ".$_SESSION['firstname']; ?></a></h3>
						<h3>e-mail : <?php echo $_SESSION['email']; ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
							</p>
						</div>
					</div><!--// .yui-gf -->
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">
							<?php
								for ($i=1;$i<=4;$i++){
									if (isset($_SESSION['skill_title'.$i]))
									{
										echo "
								<div class='talent'>
									<h2>".$_SESSION['skill_title'.$i]."</h2>
									<p>".$_SESSION['skill_comm'.$i]."	</p>
									<p>Niveau : ".$_SESSION['level'.$i]." /10</p>
								</div>";
									}
								}
							?>
						</div>
					</div><!--// .yui-gf -->

						<div class="yui-u first">
							<h2>Experience</h2>
							<br/>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<?php
							$a= 0;
							if (
									isset($_SESSION['know_societe1'])
									&& isset($_SESSION['know_title1'])
									&& isset($_SESSION['know_societe2'])
									&& isset($_SESSION['know_title2'])
									&& isset($_SESSION['know_societe3'])
									&& isset($_SESSION['know_title3'])
									&& isset($_SESSION['know_societe4'])
									&& isset($_SESSION['know_title4'])
							) {	$a = 4;	}


								if (
									isset($_SESSION['know_societe1'])
									&& isset($_SESSION['know_title1'])
									&& isset($_SESSION['know_societe2'])
									&& isset($_SESSION['know_title2'])
									&& isset($_SESSION['know_societe3'])
									&& isset($_SESSION['know_title3'])
									&& !isset($_SESSION['know_societe4'])
									&& !isset($_SESSION['know_title4'])
							){	$a = 3;	}

								if (
									isset($_SESSION['know_societe1'])
									&& isset($_SESSION['know_title1'])
									&& isset($_SESSION['know_societe2'])
									&& isset($_SESSION['know_title2'])
									&& !isset($_SESSION['know_societe3'])
									&& !isset($_SESSION['know_title3'])
									&& !isset($_SESSION['know_societe4'])
									&& !isset($_SESSION['know_title4'])
							) {	$a = 2;	}

								if (
									isset($_SESSION['know_societe1'])
									&& isset($_SESSION['know_title1'])
									&& !isset($_SESSION['know_societe2'])
									&& !isset($_SESSION['know_title2'])
									&& !isset($_SESSION['know_societe3'])
									&& !isset($_SESSION['know_title3'])
									&& !isset($_SESSION['know_societe4'])
									&& !isset($_SESSION['know_title4'])
							) {	$a = 1;	}

							if ($a == 1)
							{
								echo "
								<div class='job last'>
									<h2>".$_SESSION['know_societe'.$a]."</h2>
									<h3>".$_SESSION['know_title'.$a]."</h3>
									<h3>".$_SESSION['start_date_know'.$a]."-".$_SESSION['end_date_know'.$a]."</h3>
									<p>".$_SESSION['know_comm'.$a]."	</p>
									<p><strong>At : ".$_SESSION['know_lieu'.$a]."</strong></p>
								</div>";

							}
							else
							{
								for ($i = 2; $i <= $a; $i++) {
									if (isset($_SESSION['know_title' . $i])) {
										echo "
								<div class='job'>
									<h2>" . $_SESSION['know_societe' . $i] . "</h2>
									<h3>" . $_SESSION['know_title' . $i] . "</h3>
									<h3>" . $_SESSION['start_date_know' . $i] . "-" . $_SESSION['end_date_know' . $i] . "</h3>
									<p>" . $_SESSION['know_comm' . $i] . "	</p>
									<p><strong>At : " . $_SESSION['know_lieu' . $i] . "</strong></p>
								</div>";
									}
								}
							}
							?>
					</div><!--// .yui-gf -->

					<hr/>
					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<br/>

							<?php
							$a= 0;

								if (
									isset($_SESSION['form_etablissement1'])
									&& isset($_SESSION['form_title1'])
									&& isset($_SESSION['form_etablissement2'])
									&& isset($_SESSION['form_title2'])
									&& isset($_SESSION['form_etablissement3'])
									&& isset($_SESSION['form_title3'])
									&& isset($_SESSION['form_etablissement4'])
									&& isset($_SESSION['form_title4'])
							) {
							$a = 4;
							}

								if (
									isset($_SESSION['form_etablissement1'])
									&& isset($_SESSION['form_title1'])
									&& isset($_SESSION['form_etablissement2'])
									&& isset($_SESSION['form_title2'])
									&& isset($_SESSION['form_etablissement3'])
									&& isset($_SESSION['form_title3'])
									&& !isset($_SESSION['form_etablissement4'])
									&& !isset($_SESSION['form_title4'])
							) {
									$a = 3;
								}

								if (
									isset($_SESSION['form_etablissement1'])
									&& isset($_SESSION['form_title1'])
									&& isset($_SESSION['form_etablissement2'])
									&& isset($_SESSION['form_title2'])
									&& !isset($_SESSION['form_etablissement3'])
									&& !isset($_SESSION['form_title3'])
									&& !isset($_SESSION['form_etablissement4'])
									&& !isset($_SESSION['form_title4'])
							) {
									$a = 2;
								}

								if (
									isset($_SESSION['form_etablissement1'])
									&& isset($_SESSION['form_title1'])
									&& !isset($_SESSION['form_etablissement2'])
									&& !isset($_SESSION['form_title2'])
									&& !isset($_SESSION['form_etablissement3'])
									&& !isset($_SESSION['form_title3'])
									&& !isset($_SESSION['form_etablissement4'])
									&& !isset($_SESSION['form_title4'])
							) {
									$a = 1;
								}

								for ($i = 1; $i <= $a; $i++) {
									if (isset($_SESSION['form_title' . $i])) {
										echo "
								<br/>
								<div class='yui-u'>
									<h2>" . $_SESSION['form_etablissement' . $i] . "</h2>
									<h3>" . $_SESSION['form_title' . $i] . "</h3>
									<h3>" . $_SESSION['start_date_form' . $i] . "-" . $_SESSION['end_date_form' . $i] . "</h3>
									<p><strong>At : " . $_SESSION['form_lieu' . $i] . "</strong></p>
								</div>
								<br/>";
									}
								}
							?>
					</div><!--// .yui-gf -->
				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo $_SESSION['firstname']." ".$_SESSION['firstname']."<a href=".$_SESSION['email'].">".$_SESSION['email']."</a> &mdash;".$_SESSION['phone']; ?></p>
		</div><!--// footer -->

	</div><!-- // inner -->
</div><!--// doc -->

</body>
</html>


