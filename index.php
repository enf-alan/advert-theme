<?php

	function parse_ad_content($txt) {
		// Convert break to br code
		$txt = preg_replace('/[ ]*\n/', "<br />\n", $txt);

		return $txt;
	}

	$data = [
		[
			'video' => 'https://www.youtube.com/embed/2eebptXfEvw',
			'title' => 'New UV Vacuum Cleaner - Mamibot UVLITE100 CORDLESS mite killer',
			'desc' => "Mamibot UVLITE100, new designed cordless mattress cleaner to remove dust mites, pollens, and common bacteria, kills 99.99% mites with patented U-Type UV lamp. It is necessary if you want a real healthy and comfortable familty",
			'imgs' => [],
		],
		[
			'video' => '',
			'title' => 'Mites are bad to your life',
			'desc' => "Do you know that there are MILLIONS of mites in one single mattress? What? That is really horrible. What's more, dust mites and their waste are the main causes of allergy and asthma symptoms. Also every animal including human being releases a lot of skin rashes that may hide on your bed, sofa, floor, and even in the air.

			We are sorry, but yes these are mites under microscopes after being enlarged thousand of times. They are real, and they effect our health and life.",
			'imgs' => ['./imgs/1.jpeg'],
		],
		[
			'video' => '',
			'title' => 'And Mites are really disaster if you are allergic',
			'desc' => "No matter if you are adult or a child, or a baby, allergy symptoms like runny nose, sneezing and coughing will be annoying your life seriously. That will disrupt your ability to breathe easily and cause sleep disruptions. Skin rashes are also a common symptom",
			'imgs' => [
				'./imgs/2.jpeg','./imgs/3.jpeg',
			],
		],
		[
			'video' => '',
			'title' => 'UVLITE100 is a great helper',
			'desc' => "The 9W UV Lamp can kill 99.99% mites, bacteria, or virus, and with 4KPA suction power to get rid of the hard-to-clean materials.

			The high-precise filter and hepa filter help it to release clean air, avoid second time pollution. ",
			'imgs' => [
				'./imgs/4.jpeg', './imgs/5.jpeg', './imgs/6.jpeg',
			],
		],
		[
			'video' => '',
			'title' => 'There are reasons for UVLITE100 to help you',
			'desc' => "The truly strongest Hybrid LDS robot vacuum cleaner with maximum 4000PA vacuuming power, featured in 3 levels of water dripping speed, 4 levels suction, trash self-emptying, cleans about 60-215 sqm floor in one full charge. The truly strongest Hybrid LDS robot vacuum cleaner with maximum 4000PA vacuuming power, featured in 3 levels of water dripping speed, 4 levels suction, trash self-emptying, cleans about 60-215 sqm floor in one full charge. The truly strongest Hybrid LDS robot vacuum cleaner with maximum 4000PA vacuuming power, featured in 3 levels of water dripping speed, 4 levels suction, trash self-emptying, cleans about 60-215 sqm floor in one full charge.

			The truly strongest Hybrid LDS robot vacuum cleaner with maximum 4000PA vacuuming power, featured in 3 levels of water dripping speed, 4 levels suction, trash self-emptying, cleans about 60-215 sqm floor in one full charge.The truly strongest Hybrid LDS robot vacuum cleaner with maximum 4000PA vacuuming power, featured in 3 levels of water dripping speed, 4 levels suction, trash self-emptying, cleans about 60-215 sqm floor in one full charge.The truly strongest Hybrid LDS robot vacuum cleaner with maximum 4000PA vacuuming power, featured in 3 levels of water dripping speed, 4 levels suction, trash self-emptying, cleans about 60-215 sqm floor in one full charge.",
			'imgs' => [
				'./imgs/7.jpeg', './imgs/8.jpeg', './imgs/1.jpeg', './imgs/2.jpeg', './imgs/3.jpeg',
			],
		],
	];
?>


<!DOCTYPE html>
<html lang='en'>
<head>
	<title>ENF Test-2 - ENF Recycling Directory</title>
    <link rel="canonical" href="https://www.enfrecycling.com/enf-test-2/id/45462">    <link href="https://www.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="en" rel="alternate"><link href="https://www.enfrecycling.com.cn/enf-test-2/id/45462?preview=1" hreflang="zh" rel="alternate"><link href="https://jp.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="ja" rel="alternate"><link href="https://kr.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="ko" rel="alternate"><link href="https://ar.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="ar" rel="alternate"><link href="https://fr.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="fr" rel="alternate"><link href="https://es.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="es" rel="alternate"><link href="https://de.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="de" rel="alternate"><link href="https://it.enfrecycling.com/enf-test-2/id/45462?preview=1" hreflang="it" rel="alternate">    <link rel="apple-touch-icon" sizes="57x57" href="https://cdn.enfrecycling.com/Common/images/apple/enf57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://cdn.enfrecycling.com/Common/images/apple/enf72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://cdn.enfrecycling.com/Common/images/apple/enf114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://cdn.enfrecycling.com/Common/images/apple/enf144.png">
    <link href="https://cdn.enfrecycling.com/Member/css/layout.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel='stylesheet' href="./css/mf.css">
    <link rel='stylesheet' href="./css/all.css">
    <link rel='stylesheet' href="./css/mf_end.css">
    </head>
<body>
	<div x-data="{ tab: 'plastic' }">

		<div x-show="tab === 'plastic'">
			<section class="pb-5 mt-20">
				<div class="py-8 text-5xl font-bold text-white bg-blue">
					<div class="flex items-center mx-auto max-w-body">Products</div>
				</div>

				<div class="flex">
					<div class="mf-s mf-s-underline" >
						<?php
							foreach ($data as $section) {
								if ($section['video']) {
									echo <<<XXX
										<div class="max-w-body mx-auto !mt-8">
											<div class="flex justify-center video aspect-w-16 aspect-h-9">
												<iframe src="{$section['video']}" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
										</div>
									XXX;
								}

								echo '<div class="mt-20 mf-s-body">';
								if ($section['title']) {
									echo <<<XXX
										<h3 class="text-3xl sm:text-5xl lg:text-6xl mf-s-head">
											{$section['title']}
										</h3>
									XXX;
								}

								if ($section['desc']) {
									$section['desc'] = parse_ad_content($section['desc']);
									echo <<<XXX
										<div class="mf-s-desc">{$section['desc']}</div>
									XXX;
								}

								if ($section['imgs']) {
									echo '<div class="mt-12 mf-s-imgs">';
										foreach ($section['imgs'] as $img) {
											echo <<<XXX
												<img class="enf-lazy" data-original="{$img}" src="https://cdn.enfrecycling.com/img/wideimgholder.jpg" alt="">
											XXX;
										}
									echo '</div>';
								}

								echo '</div>';
							}
						?>
					</div>
				</div>
			</section>
		</div>
	</div>

    <script src="./js/libs.js"></script>
	<script src="./js/all.js"></script>
</body>
</html>