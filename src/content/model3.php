<?php
use mikehaertl\wkhtmlto\Pdf;
var_dump($_SESSION);
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
					<h1><?php
						echo ($_SESSION['name'])." ".$_SESSION['firstname'];
						?>
					</h1>
					<h2>Developpeur</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a>téléphone : {{cvData.user.phone}}</a></h3>
						<h3>e-mail : {{cvData.user.email}}</h3>
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

								<div class="talent">
									<h2>{{ cvData.skill.skill_1.title }}</h2>
									<p>{{ cvData.skill.skill_1.comment }}	</p>
									<p>Niveau : {{ cvData.skill.skill_1.level }} /10</p>
								</div>

								<div class="talent">
									<h2>{{ cvData.skill.skill_2.title }}</h2>
									<p>{{ cvData.skill.skill_2.comment }}	</p>
									<p>Niveau : {{ cvData.skill.skill_2.level }} /10</p>
								</div>

								<div class="talent">
									<h2>{{ cvData.skill.skill_3.title }}</h2>
									<p>{{ cvData.skill.skill_3.comment }}	</p>
									<p>Niveau : {{ cvData.skill.skill_3.level }} /10</p>
								</div>

							<div class="talent">
								<h2>{{ cvData.skill.skill_4.title }}</h2>
								<p>{{ cvData.skill.skill_4.comment }}	</p>
								<p>Niveau : {{ cvData.skill.skill_4.level }} /10</p>
							</div>
						</div>
					</div><!--// .yui-gf -->

						<div class="yui-u first">
							<h2>Experience</h2>
							<br/>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2>{{ cvData.knowledge.knowledge_1.company }}</h2>
								<h3>{{ cvData.knowledge.knowledge_1.title }}</h3>
								<h4>{{ cvData.knowledge.knowledge_1.start_date }} / {{ cvData.knowledge.knowledge_1.end_date }}</h4>
								<p>{{ cvData.knowledge.knowledge_1.comment }}</p>
								<p><strong>{{ cvData.knowledge.knowledge_1.adress }}</strong></p>
							</div>

							<div class="job">
								<h2>{{ cvData.knowledge.knowledge_2.company }}</h2>
								<h3>{{ cvData.knowledge.knowledge_2.title }}</h3>
								<h4>{{ cvData.knowledge.knowledge_2.start_date }} / {{ cvData.knowledge.knowledge_1.end_date }}</h4>
								<p>{{ cvData.knowledge.knowledge_2.comment }}</p>
								<p><strong>{{ cvData.knowledge.knowledge_2.adress }}</strong></p>
							</div>

							<div class="job">
								<h2>{{ cvData.knowledge.knowledge_3.company }}</h2>
								<h3>{{ cvData.knowledge.knowledge_3.title }}</h3>
								<h4>{{ cvData.knowledge.knowledge_3.start_date }} / {{ cvData.knowledge.knowledge_1.end_date }}</h4>
								<p>{{ cvData.knowledge.knowledge_3.comment }}</p>
								<p><strong>{{ cvData.knowledge.knowledge_3.adress }}</strong></p>
							</div>


							<div class="job last">
								<h2>{{ cvData.knowledge.knowledge_4.company }}</h2>
								<h3>{{ cvData.knowledge.knowledge_4.title }}</h3>
								<h4>{{ cvData.knowledge.knowledge_4.start_date }} / {{ cvData.knowledge.knowledge_1.end_date }}</h4>
								<p>{{ cvData.knowledge.knowledge_4.comment }}</p>
								<p><strong>{{ cvData.knowledge.knowledge_4.adress }}</strong></p>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->

					<hr/>
					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<br/>
						<div class="yui-u">
							<h2>{{ cvData.formation.formation_1.title }}</h2>
							<h3>{{ cvData.formation.formation_1.establishement }}, {{ cvData.formation.formation_1.adress }} &mdash; <strong>{{ cvData.formation.formation_1.state }}</strong> </h3>
							<h4>{{ cvData.formation.formation_1.start_date }}-{{ cvData.formation.formation_1.end_date }}</h4>
						</div>
						<br/>
						<div class="yui-u">
							<h2>{{ cvData.formation.formation_2.title }}</h2>
							<h3>{{ cvData.formation.formation_2.establishement }}, {{ cvData.formation.formation_2.adress }} &mdash; <strong>{{ cvData.formation.formation_2.state }}</strong> </h3>
							<h4>{{ cvData.formation.formation_2.start_date }}-{{ cvData.formation.formation_2.end_date }}</h4>
						</div>
						<br/>
						<div class="yui-u">
							<h2>{{ cvData.formation.formation_3.title }}</h2>
							<h3>{{ cvData.formation.formation_3.establishement }}, {{ cvData.formation.formation_3.adress }} &mdash; <strong>{{ cvData.formation.formation_3.state }}</strong> </h3>
							<h4>{{ cvData.formation.formation_3.start_date }}-{{ cvData.formation.formation_3.end_date }}</h4>
						</div>
						<br/>
						<div class="yui-u">
							<h2>{{ cvData.formation.formation_4.title }}</h2>
							<h3>{{ cvData.formation.formation_4.establishement }}, {{ cvData.formation.formation_4.adress }} &mdash; <strong>{{ cvData.formation.formation_4.state }}</strong> </h3>
							<h4>{{ cvData.formation.formation_4.start_date }}-{{ cvData.formation.formation_4.end_date }}</h4>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>{{ cvData.user.firstname }} {{ cvData.user.name }} &mdash; <a href="{{ cvData.user.email }}">{{ cvData.user.email }}</a> &mdash; {{ cvData.user.phone }}</p>
		</div><!--// footer -->

	</div><!-- // inner -->
</div><!--// doc -->

</body>
</html>
<?php
$content = ob_get_clean();
$generatedPdf = new Pdf
(
	['binary' => 'C:\wkhtmltopdf\bin\wkhtmltopdf',
		'ignoreWarnings' => true,
		'commandOptions' =>
			[   'useExec' => true,
				'escapeArgs' => false,
				'procOptions' => array(
					// This will bypass the cmd.exe which seems to be recommended on Windows
					'bypass_shell' => true,
					// Also worth a try if you get unexplainable errors
					'suppress_errors' => false,
				),
			],
	]
);
$globalOptions = array(
	'no-outline', // Make Chrome not complain
	// Default page options
	'page-size' => 'Letter'
);

$generatedPdf->setOptions($globalOptions);
$generatedPdf->tmpDir = 'c:/wamp64/www/gener_cv/src/content/CVs';
$generatedPdf->addPage($content);

#$generatedPdf->saveAs('c:/wamp64/www/generateur_cv/src/views/CVs/');

if (!$generatedPdf->send()) {
	throw new \Exception('Could not create PDF: '.$generatedPdf->getError());exit;
}exit;


/*$content = ob_get_clean();
$pdf = new \mikehaertl\wkhtmlto\Pdf();
$pdf->addPage($content);
$pdf->send('test.pdf');

if (!$pdf->send()) {
	throw new Exception('Could not create PDF: '.$pdf->getError());
}

$content = $pdf->toString();
if ($content === false) {
	throw new Exception('Could not create PDF: '.$pdf->getError());
}*/

?>
