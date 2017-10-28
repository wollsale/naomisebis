<!DOCTYPE html>
<html lang="en" class="homepage">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>WebPack</title>
		<link rel="stylesheet" href="dist/app.css">

		<?php wp_head(); ?>
	</head>
	<body>

		<header>
			<div class="container">
				<div class="header-blog">
					<h1 class="header-blog__title"></h1>
					<!-- <span class="header-blog__subtitle">From belgium to spain</span> -->
				</div>
				<div class="header-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/palm_01.jpg" alt="">
				</div>
			</div>
		</header>


		<main>
			<section class="banner">
			<svg width="58" height="90" viewBox="0 0 58 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Canvas" transform="translate(-7231 -433)">
				<g id="Group">
				<g id="Vector">
				<use xlink:href="#path0_fill" transform="translate(7231.61 433)" fill="#6BEAB0"/>
				</g>
				<g id="Vector">
				<use xlink:href="#path1_fill" transform="translate(7244.21 521.663)" fill="#6BEAB0"/>
				</g>
				</g>
				</g>
				<defs>
				<path id="path0_fill" d="M 56.7168 11.6486C 56.4978 11.0036 55.9018 11.0836 55.3848 11.0696C 52.9748 11.0026 50.5558 10.7856 48.1578 10.9246C 45.1898 11.0966 42.2118 11.4706 39.5218 12.9166C 38.6168 13.4026 37.7738 14.0056 36.8328 14.5986C 36.7198 14.2636 36.6258 14.0256 36.5588 13.7796C 35.3088 9.14456 33.4928 4.75656 30.8888 0.707563C 30.6778 0.379563 30.6008 -0.0284376 30.0738 0.00156242C 29.5458 0.0315624 29.4858 0.452562 29.3368 0.803562C 29.0588 1.45656 28.7068 2.08556 28.1868 2.54956C 26.7358 3.84256 25.8988 5.52356 25.0898 7.22756C 24.0448 9.42756 22.6298 11.4596 22.2078 13.9016C 21.9868 13.8726 21.8938 13.8816 21.8248 13.8466C 21.7088 13.7866 21.5998 13.7076 21.5028 13.6206C 18.2878 10.7556 14.5978 9.24556 10.2228 9.50656C 7.17981 9.68756 4.26181 10.4206 1.36481 11.2786C 0.686806 11.4796 0.339806 12.0516 1.11081 12.4886C 3.76481 13.9936 5.90581 16.1566 8.33081 17.9516C 9.47181 18.7956 10.5938 19.6646 11.8668 20.6296C 11.3068 20.8156 10.9858 20.9476 10.6528 21.0286C 7.57981 21.7746 4.99581 23.3076 2.91181 25.7046C 2.22581 26.4936 1.44281 27.2016 0.664805 27.9026C 0.378805 28.1606 -0.0891942 28.2726 0.0148058 28.7706C 0.127806 29.3096 0.612806 29.3646 1.04881 29.4006C 7.06981 29.9006 13.0898 30.4306 19.1158 30.8656C 21.2758 31.0216 21.2638 30.9386 21.5288 33.1366C 21.8868 36.1106 21.6558 39.0946 21.7708 42.0706C 21.8588 44.3596 22.4248 46.5956 24.2218 48.1016C 25.2658 48.9766 25.5828 49.7826 25.3308 50.9986C 25.2608 51.3376 25.2788 51.6976 25.2798 52.0476C 25.3008 62.9186 25.3258 73.7906 25.3468 84.6616C 25.3478 84.9996 25.4678 85.3686 25.1878 85.6116C 23.8018 85.6116 22.4598 85.6116 21.1688 85.6116C 20.8488 85.0366 21.4688 84.3626 20.8138 83.9986C 20.0908 83.9666 20.3168 84.8706 19.8198 85.0006C 19.1078 84.5706 19.1858 83.0416 18.0958 83.5056C 17.1278 83.9176 18.2688 84.7856 18.1228 85.6426C 17.0778 85.6426 16.0008 85.6356 14.9238 85.6436C 12.4698 85.6626 10.0158 85.6866 7.56281 85.7146C 7.18581 85.7186 6.66381 85.5956 6.62781 86.1506C 6.58981 86.7396 7.10681 86.7926 7.55781 86.8136C 7.86381 86.8276 8.17181 86.8206 8.47881 86.8166C 11.7218 86.7736 14.9648 86.7166 18.2078 86.6886C 20.5208 86.6686 22.8328 86.6846 25.1458 86.6846C 25.1478 86.7926 25.1508 86.9016 25.1528 87.0096C 23.5488 87.0096 21.9368 86.9116 20.3418 87.0376C 18.7818 87.1606 17.1308 86.5476 15.4188 87.3626C 16.1558 88.1706 16.8568 88.1436 17.5528 88.1536C 29.6538 88.3226 41.7548 88.1826 53.8568 88.1466C 54.1198 88.1456 54.3848 88.1486 54.6448 88.1196C 54.9888 88.0806 55.2238 87.8916 55.2128 87.5236C 55.2038 87.1936 54.9318 87.0996 54.6668 87.0656C 54.3638 87.0276 54.0548 87.0276 53.7488 87.0246C 49.8038 86.9886 45.8578 86.9416 41.9128 86.9226C 38.4128 86.9056 34.9128 86.9186 31.4128 86.9186C 31.4118 86.8316 31.4098 86.7446 31.4088 86.6566C 31.6498 86.6566 31.8918 86.6566 32.1328 86.6566C 37.9618 86.6476 43.7918 86.6326 49.6148 86.3126C 50.1768 86.2816 50.8868 86.4726 51.2318 85.5056C 49.3048 84.8706 47.3438 85.4986 45.3858 85.2426C 45.5308 84.7786 45.6888 84.3756 45.7778 83.9566C 45.8638 83.5526 45.8238 83.1156 45.3438 82.9936C 44.9088 82.8836 44.7648 83.2576 44.6158 83.5906C 44.4628 83.9326 44.4078 84.3476 43.9398 84.5806C 43.3888 83.9006 42.9878 83.0136 41.9658 82.7516C 41.3358 83.8266 42.6438 84.3826 42.5728 85.3386C 40.6878 85.5646 38.8248 85.4866 36.9498 85.4716C 36.7328 84.6056 36.5738 83.8176 35.9118 83.2876C 35.6758 83.0996 35.4318 82.8506 35.0968 83.0566C 34.7328 83.2806 34.7478 83.6146 34.8738 83.9816C 35.0248 84.4206 35.3878 84.8146 35.1648 85.4236C 33.8148 85.4236 32.4468 85.4236 31.0968 85.4236C 31.0558 85.2596 31.0168 85.1756 31.0168 85.0916C 31.0058 73.2096 31.0038 61.3266 30.9708 49.4446C 30.9698 48.8656 31.2408 48.6016 31.6088 48.2706C 33.1398 46.8936 34.3528 45.3096 34.6248 43.1836C 34.8868 41.1396 35.1068 39.0956 35.1018 37.0266C 35.0958 34.8836 35.5058 32.8046 36.3158 30.7716C 36.8988 30.8296 37.4198 30.8746 37.9388 30.9356C 42.7598 31.5016 47.5798 32.0836 52.4028 32.6326C 54.5208 32.8736 54.8498 32.4236 54.1368 30.3726C 54.0518 30.1276 53.8878 29.9116 53.7728 29.6766C 52.4828 27.0406 50.6248 24.8816 48.0368 23.1066C 51.1038 19.9606 53.2438 16.2596 56.1248 13.1416C 56.5258 12.7116 56.9318 12.2856 56.7168 11.6486ZM 42.8558 13.2786C 43.5518 13.1766 44.1558 13.5336 44.6018 14.0316C 46.4788 16.1286 47.6428 18.5026 47.3148 21.4156C 47.2598 21.9036 47.1438 22.5086 46.6158 22.5156C 45.8028 22.5276 46.2698 21.8636 46.2108 21.4506C 46.0098 20.0406 45.5838 18.6836 44.4408 17.7556C 43.0238 16.6046 41.6018 15.4086 39.6578 15.2196C 39.5078 15.2046 39.3698 15.0736 39.1028 14.9306C 40.3038 14.0576 41.5028 13.4766 42.8558 13.2786ZM 47.4918 24.7826C 47.4598 25.8356 46.6248 26.3326 45.8608 26.9236C 46.0448 26.0486 45.9728 25.1746 46.0828 24.3226C 46.6468 24.1566 47.0188 24.4736 47.4918 24.7826ZM 40.4068 16.4016C 42.8368 17.1636 44.9508 18.4736 45.4748 21.3086C 45.4988 21.4376 45.5228 21.5676 45.5238 21.6976C 45.5248 21.7786 45.4818 21.8596 45.4358 22.0226C 43.6848 21.5496 41.9338 20.8416 40.0988 21.1156C 38.7238 21.3206 37.8088 21.0596 37.1858 19.7396C 36.7918 18.9046 35.8488 18.6776 35.0218 18.3896C 36.0918 16.4086 37.8988 15.6146 40.4068 16.4016ZM 30.2208 24.9446C 30.8418 22.5026 32.1208 20.7876 33.6628 19.2196C 34.1248 18.7506 34.5438 18.7786 35.0638 19.0456C 36.0308 19.5426 36.7648 20.2396 37.2258 21.4876C 34.6168 22.0866 32.5078 23.4666 30.2208 24.9446ZM 36.6148 23.5056C 35.4908 25.4746 34.6448 27.4596 32.8878 28.7186C 31.8158 29.4866 30.4458 28.9176 29.1988 29.0416C 29.3188 27.3176 33.5318 24.1636 36.6148 23.5056ZM 34.7018 16.3896C 33.9098 16.8516 33.2768 17.5866 32.5728 18.1986C 33.1888 16.4146 34.0838 14.8646 35.3538 13.4346C 35.9808 14.7056 35.9988 15.6336 34.7018 16.3896ZM 34.0548 8.90756C 34.4268 10.0146 34.7758 11.0706 35.1398 12.1216C 35.2898 12.5556 35.1378 12.8786 34.8378 13.1756C 33.7538 14.2496 32.8918 15.4906 32.0868 16.8056C 32.3238 14.1116 31.0898 11.0896 34.0548 8.90756ZM 33.4408 7.31456C 33.6288 7.79756 33.4758 8.13356 33.1778 8.49856C 32.7738 8.99456 32.4168 9.52756 31.7938 10.3816C 31.9678 7.55056 31.5688 5.16556 31.0698 2.42156C 32.1388 4.20056 32.8278 5.73756 33.4408 7.31456ZM 27.6268 5.07756C 28.3388 4.10456 29.0628 3.14056 29.9548 1.94056C 30.4348 5.04056 31.1838 7.78956 30.9448 10.6586C 30.6548 10.8736 30.5678 10.6446 30.4768 10.4566C 29.7318 8.91656 28.8788 7.44356 27.7598 6.13956C 27.4738 5.80756 27.3458 5.46156 27.6268 5.07756ZM 26.9748 6.44356C 28.3118 7.91956 29.1838 9.57756 29.8778 11.3636C 27.2758 8.44656 26.6348 7.37556 26.9748 6.44356ZM 26.0438 8.20756C 28.2388 11.4756 31.2738 14.1606 30.8528 18.8806C 28.3438 16.4176 26.9228 13.5056 24.2658 11.5066C 24.8638 10.3956 25.3998 9.40256 26.0438 8.20756ZM 23.7928 12.6476C 24.7778 13.2036 25.4098 14.0076 26.0858 14.7196C 27.4398 16.1466 28.6888 17.6736 29.9838 19.1576C 30.5368 19.7916 30.5998 20.4766 30.2388 21.2256C 29.6138 22.5216 29.1188 23.8696 28.5718 25.2976C 27.6348 21.6626 26.0138 18.4276 23.4898 15.6366C 22.6068 14.6616 23.5178 13.7006 23.7928 12.6476ZM 27.2278 25.2636C 25.8328 23.6346 24.3968 22.6286 22.6998 22.0216C 22.4858 21.9446 22.3338 21.7636 22.4028 21.5096C 22.9868 19.3436 21.9188 17.4436 21.3758 15.3316C 24.3328 17.9876 26.4208 21.0136 27.2278 25.2636ZM 26.7068 30.1316C 23.5638 26.4266 19.7738 23.7876 15.7448 21.3566C 19.9848 21.8736 24.1278 22.5736 27.0818 26.2836C 28.2898 27.8026 27.0738 28.7466 26.7068 30.1316ZM 21.2808 21.2796C 20.5998 21.3926 20.2288 21.1236 20.1558 20.4296C 19.8418 17.4266 18.8988 14.6646 16.7688 12.1426C 20.4918 13.7736 21.3028 16.2756 21.2808 21.2796ZM 9.58881 17.3776C 7.19481 15.8026 5.24481 13.7276 2.56081 12.0626C 3.44381 11.8346 3.93781 11.6356 4.44481 11.5916C 5.42181 11.5076 6.43681 10.5826 7.37881 11.5186C 9.65681 13.7806 10.1688 15.1756 9.58881 17.3776ZM 8.02781 10.9546C 9.92281 10.6396 10.7168 11.7816 10.8888 14.8446C 10.4468 13.2526 9.26181 12.1996 8.02781 10.9546ZM 11.4928 18.7076C 12.4938 15.9426 12.1058 13.4146 10.6058 10.9056C 12.8598 10.6686 14.7868 10.8576 16.2908 12.8456C 18.0058 15.1126 19.1458 17.5106 19.1238 20.7316C 16.5628 19.7446 13.5978 21.2746 11.4928 18.7076ZM 2.11081 28.2196C 3.30181 26.9866 4.34081 25.9046 5.39081 24.8336C 5.50681 24.7156 5.71281 24.5586 5.83181 24.5906C 8.58881 25.3246 11.0958 26.5016 12.9798 28.7846C 9.39881 28.5946 5.85081 28.7776 2.11081 28.2196ZM 13.5248 27.8076C 11.9068 26.2236 9.88181 25.1566 7.85981 24.1346C 7.64481 24.0256 7.32381 24.0676 7.26781 23.7286C 9.59981 22.7566 13.6258 25.0086 17.1838 29.3376C 15.6038 29.4206 14.5618 28.8216 13.5248 27.8076ZM 21.4128 29.6116C 19.2938 29.8566 17.7968 29.2356 16.6988 27.3146C 15.4398 25.1116 13.2268 24.0786 10.9318 23.2476C 10.5318 23.1026 10.1378 22.9416 9.47681 22.6856C 11.9088 21.3746 14.1078 21.8826 16.0348 22.8246C 19.1808 24.3616 21.8998 26.5986 24.4438 29.0156C 24.5978 29.1616 24.7038 29.3586 25.0038 29.7656C 23.6748 29.6956 22.5248 29.4826 21.4128 29.6116ZM 29.7378 86.7716C 28.6618 86.9466 27.5858 86.8586 26.3418 86.8146C 26.4398 86.2906 26.5098 85.9146 26.6098 85.3756C 27.6768 86.8156 28.6918 86.4526 29.6698 85.3816C 29.9448 85.8876 29.8558 86.2996 29.7378 86.7716ZM 26.6348 81.7496C 27.1648 82.0986 27.5168 82.6256 28.0988 82.8096C 28.7448 83.0146 29.1458 82.5466 29.6178 82.2686C 30.0548 83.5146 29.8068 83.9286 27.9088 85.0616C 27.4158 84.0086 26.2678 83.2506 26.6348 81.7496ZM 29.5218 80.9706C 28.6058 82.1216 28.1968 82.0866 27.4398 80.8276C 26.9388 79.9946 26.1498 79.2716 26.7468 78.0986C 27.6378 78.6536 28.4058 79.7286 29.7738 79.2886C 29.9328 80.0316 29.8858 80.5126 29.5218 80.9706ZM 28.3388 70.2856C 26.4758 69.4326 26.2868 68.9416 26.7338 66.2236C 28.5808 66.7266 28.5808 66.7266 29.7448 66.2996C 30.3588 68.1046 29.2458 69.1526 28.3388 70.2856ZM 28.5068 73.8606C 27.4678 72.9366 26.3658 72.3146 26.6628 70.6946C 27.6788 71.1846 28.7178 71.9566 29.6308 70.4736C 30.4248 72.0356 29.1418 72.7126 28.5068 73.8606ZM 28.3768 57.3496C 27.1558 56.5536 26.1218 55.6866 26.7258 53.9216C 27.6898 54.4216 28.6838 55.0546 29.6838 53.8396C 30.2918 55.4896 29.6018 56.4996 28.3768 57.3496ZM 27.9208 60.9516C 26.6228 60.1236 26.3798 59.0926 26.7308 57.7216C 27.6808 58.4546 28.5908 59.3206 29.7018 57.9136C 30.3058 59.7966 28.4818 59.9146 27.9208 60.9516ZM 28.2388 53.4106C 26.5158 52.7676 26.3878 51.4136 26.6218 49.7566C 27.7068 49.8266 28.6828 49.6706 29.6688 49.3856C 30.4008 51.2386 29.3518 52.3306 28.2388 53.4106ZM 28.9728 78.0116C 27.4498 77.3296 26.5298 75.8336 26.6598 74.1036C 27.6498 74.6806 28.6338 75.3356 29.8418 74.1556C 29.8878 75.7816 30.2068 77.0856 28.9728 78.0116ZM 29.5838 64.5176C 29.2898 65.0766 28.9848 65.7846 28.1248 65.5146C 27.3418 65.2686 26.6868 64.8206 26.6118 63.9106C 26.5588 63.2616 26.6018 62.6056 26.6018 61.7806C 27.7348 62.5656 27.7348 62.5656 29.7888 61.1836C 29.8768 62.3486 30.1398 63.4626 29.5838 64.5176ZM 29.4838 47.0686C 29.3778 47.5606 29.9368 47.5076 29.9208 47.8456C 27.6008 48.9186 26.9778 48.8676 25.8068 47.5056C 26.1408 47.2066 26.5498 47.3956 26.9168 47.3316C 27.2548 47.2726 27.6188 47.2966 27.9108 46.9406C 27.4158 46.4376 26.7818 46.5896 26.2108 46.5806C 24.3048 46.5506 24.1188 46.3926 23.8068 44.3326C 26.7128 44.4206 29.6028 44.6726 32.5168 44.5686C 32.3478 46.1976 32.3478 46.1976 29.4838 47.0686ZM 32.1908 41.7936C 30.0108 41.7186 27.8348 41.3106 25.6468 41.6926C 25.1818 41.7736 24.7138 41.8406 23.8638 41.9746C 27.1498 42.4326 30.0598 42.5706 32.9348 42.4706C 33.2618 43.5306 32.7738 43.6846 32.0368 43.7026C 29.3218 43.7676 26.6258 43.2556 23.9078 43.4436C 23.3658 43.4806 23.2268 43.1176 23.2118 42.6986C 23.1858 41.9606 23.2048 41.2216 23.2048 40.2816C 26.6268 40.2326 29.9178 40.7966 33.2148 40.2916C 33.5118 41.3926 33.2208 41.8296 32.1908 41.7936ZM 31.9698 39.8206C 30.5398 39.6656 29.1068 39.5026 27.6708 39.4366C 26.2408 39.3716 24.8048 39.4226 23.3988 39.4226C 23.0398 38.9296 23.1448 38.4706 23.2608 37.9236C 26.6478 37.6636 30.0238 38.4086 33.4858 38.0056C 33.6488 39.8046 33.4668 39.9826 31.9698 39.8206ZM 32.8788 36.9186C 29.7098 36.5406 26.5268 36.5516 23.3428 36.5546C 23.2968 36.5546 23.2498 36.4276 23.2008 36.3546C 23.2768 35.8266 23.6848 35.9686 24.0068 35.9686C 26.9288 35.9636 29.8518 35.9656 32.7738 35.9626C 33.1528 35.9626 33.6148 35.8116 33.6158 36.4486C 33.6158 36.9796 33.2278 36.9596 32.8788 36.9186ZM 23.2618 33.5126C 22.9178 33.5166 22.9118 33.0756 23.0318 32.6346C 26.5718 32.6896 30.1308 33.0726 33.7028 32.9226C 33.7058 33.0526 33.7088 33.1836 33.7118 33.3136C 30.2288 33.3876 26.7458 33.4766 23.2618 33.5126ZM 32.7298 31.9316C 32.0748 31.8876 31.4148 31.9006 30.7588 31.8766C 30.1028 31.8516 29.4478 31.8106 28.7918 31.7776C 30.6528 31.4666 32.5158 31.4806 34.5608 31.5226C 33.9528 32.4396 33.3108 31.9706 32.7298 31.9316ZM 34.3058 29.0966C 35.1968 27.8496 36.0958 26.6086 36.9728 25.3526C 37.2208 24.9986 37.5018 24.6236 37.6028 24.2176C 37.9238 22.9246 38.8058 22.6746 40.2598 22.8046C 38.6528 25.4766 36.9398 27.6976 34.3058 29.0966ZM 41.1078 29.9466C 39.5418 29.7816 37.9778 29.5906 36.0458 29.3686C 38.1608 27.4636 39.6078 25.4086 40.7388 23.1286C 40.9008 22.8026 41.1538 22.6676 41.4818 22.7246C 42.5598 22.9126 43.6318 23.1196 44.6638 23.5086C 45.2888 23.7446 45.1938 24.2416 45.1628 24.7116C 45.0648 26.1916 44.4628 27.4966 43.6918 28.7286C 43.0998 29.6746 42.2048 30.0626 41.1078 29.9466ZM 48.3408 25.2736C 50.3358 26.9266 51.8018 28.8516 52.8188 31.5276C 49.7778 31.0426 47.0578 30.6096 44.1418 30.1446C 45.8518 28.6456 47.0928 26.9986 48.3408 25.2736ZM 48.1878 20.3786C 48.1348 17.2876 46.6128 15.0326 44.3908 12.9856C 46.1148 12.4446 47.8178 12.3256 49.5418 12.3456C 50.1798 12.3526 50.1798 12.8226 50.1978 13.2666C 50.2318 14.0966 50.1538 14.9466 50.3038 15.7536C 50.6798 17.7696 49.8908 19.1996 48.1878 20.3786ZM 51.3088 16.5116C 51.2338 15.1916 51.1588 13.8716 51.0848 12.5516C 51.8288 13.8236 51.8738 15.1466 51.3088 16.5116ZM 52.5718 14.9706C 52.3868 14.0296 52.2338 13.2476 52.0558 12.3416C 52.9768 12.3416 53.8118 12.3416 54.8428 12.3416C 54.0438 13.2676 53.3668 14.0506 52.5718 14.9706Z"/>
				<path id="path1_fill" d="M 28.117 0.00879537C 26.63 0.0137954 25.143 0.0607989 23.656 0.0717989C 16.308 0.124799 8.958 -0.180198 1.613 0.232802C 1.079 0.262802 0.456999 0.079801 -9.15527e-07 0.734801C 0.532999 1.1838 1.161 1.08079 1.743 1.07979C 5.899 1.07179 10.054 1.1508 14.21 1.2368C 18.843 1.3328 23.484 1.4518 28.116 1.1108C 28.544 1.0798 29.113 1.1268 29.117 0.532797C 29.121 -0.108203 28.524 0.00779537 28.117 0.00879537Z"/>
				</defs>
			</svg>

				
				<?php echo the_content(); ?>

				<?php if( have_posts() ) {
				  while( have_posts() ) {
				  the_post();
				    the_content();
				  }
				} ?>
			</section>
			<section class="articles">

			<?php 
				$posts = get_posts();

				if ($posts) {
					foreach ($posts as $key => $post) {
				 		?>
							
							
					<li class="articles__item">
						<a href="<?php echo get_permalink($post->ID); ?>" class="article">
							<div class="article__img objectfitContainer">
								<img src="<?php echo get_the_post_thumbnail_url( $post->ID); ?>" alt=""/>
							</div>
							<div class="article__infos">
								<h2 class="article__title"><?php the_title() ?></h2>
								<!-- <p class="article__infos--excerpt transformed"><?php the_excerpt() ?></p> -->
								<div class="article__infos--min">
									<ul class="article__tags">
										<?php $tags = get_tags(); ?>
										<?php foreach ($tags as $key => $tag) {
										?>
											<li class="tag">
												<?php echo $tag->name; ?>
											</li>
										<?php
										} ?>
									</ul>
									<p class="article__date"><?php echo get_the_date() ?></p>
								</div>
							</div>
						</a>
					</li>


				 		<?php
					}
				}

			?>		

			</section>
		</main>


		<!-- Footer -->
		<footer class="footer">
			<svg class="footer__palm" width="58" height="90" viewBox="0 0 58 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Canvas" transform="translate(-7231 -433)">
				<g id="Group">
				<g id="Vector">
				<use xlink:href="#path0_fill" transform="translate(7231.61 433)" fill="#6BEAB0"/>
				</g>
				<g id="Vector">
				<use xlink:href="#path1_fill" transform="translate(7244.21 521.663)" fill="#6BEAB0"/>
				</g>
				</g>
				</g>
				<defs>
				<path id="path0_fill" d="M 56.7168 11.6486C 56.4978 11.0036 55.9018 11.0836 55.3848 11.0696C 52.9748 11.0026 50.5558 10.7856 48.1578 10.9246C 45.1898 11.0966 42.2118 11.4706 39.5218 12.9166C 38.6168 13.4026 37.7738 14.0056 36.8328 14.5986C 36.7198 14.2636 36.6258 14.0256 36.5588 13.7796C 35.3088 9.14456 33.4928 4.75656 30.8888 0.707563C 30.6778 0.379563 30.6008 -0.0284376 30.0738 0.00156242C 29.5458 0.0315624 29.4858 0.452562 29.3368 0.803562C 29.0588 1.45656 28.7068 2.08556 28.1868 2.54956C 26.7358 3.84256 25.8988 5.52356 25.0898 7.22756C 24.0448 9.42756 22.6298 11.4596 22.2078 13.9016C 21.9868 13.8726 21.8938 13.8816 21.8248 13.8466C 21.7088 13.7866 21.5998 13.7076 21.5028 13.6206C 18.2878 10.7556 14.5978 9.24556 10.2228 9.50656C 7.17981 9.68756 4.26181 10.4206 1.36481 11.2786C 0.686806 11.4796 0.339806 12.0516 1.11081 12.4886C 3.76481 13.9936 5.90581 16.1566 8.33081 17.9516C 9.47181 18.7956 10.5938 19.6646 11.8668 20.6296C 11.3068 20.8156 10.9858 20.9476 10.6528 21.0286C 7.57981 21.7746 4.99581 23.3076 2.91181 25.7046C 2.22581 26.4936 1.44281 27.2016 0.664805 27.9026C 0.378805 28.1606 -0.0891942 28.2726 0.0148058 28.7706C 0.127806 29.3096 0.612806 29.3646 1.04881 29.4006C 7.06981 29.9006 13.0898 30.4306 19.1158 30.8656C 21.2758 31.0216 21.2638 30.9386 21.5288 33.1366C 21.8868 36.1106 21.6558 39.0946 21.7708 42.0706C 21.8588 44.3596 22.4248 46.5956 24.2218 48.1016C 25.2658 48.9766 25.5828 49.7826 25.3308 50.9986C 25.2608 51.3376 25.2788 51.6976 25.2798 52.0476C 25.3008 62.9186 25.3258 73.7906 25.3468 84.6616C 25.3478 84.9996 25.4678 85.3686 25.1878 85.6116C 23.8018 85.6116 22.4598 85.6116 21.1688 85.6116C 20.8488 85.0366 21.4688 84.3626 20.8138 83.9986C 20.0908 83.9666 20.3168 84.8706 19.8198 85.0006C 19.1078 84.5706 19.1858 83.0416 18.0958 83.5056C 17.1278 83.9176 18.2688 84.7856 18.1228 85.6426C 17.0778 85.6426 16.0008 85.6356 14.9238 85.6436C 12.4698 85.6626 10.0158 85.6866 7.56281 85.7146C 7.18581 85.7186 6.66381 85.5956 6.62781 86.1506C 6.58981 86.7396 7.10681 86.7926 7.55781 86.8136C 7.86381 86.8276 8.17181 86.8206 8.47881 86.8166C 11.7218 86.7736 14.9648 86.7166 18.2078 86.6886C 20.5208 86.6686 22.8328 86.6846 25.1458 86.6846C 25.1478 86.7926 25.1508 86.9016 25.1528 87.0096C 23.5488 87.0096 21.9368 86.9116 20.3418 87.0376C 18.7818 87.1606 17.1308 86.5476 15.4188 87.3626C 16.1558 88.1706 16.8568 88.1436 17.5528 88.1536C 29.6538 88.3226 41.7548 88.1826 53.8568 88.1466C 54.1198 88.1456 54.3848 88.1486 54.6448 88.1196C 54.9888 88.0806 55.2238 87.8916 55.2128 87.5236C 55.2038 87.1936 54.9318 87.0996 54.6668 87.0656C 54.3638 87.0276 54.0548 87.0276 53.7488 87.0246C 49.8038 86.9886 45.8578 86.9416 41.9128 86.9226C 38.4128 86.9056 34.9128 86.9186 31.4128 86.9186C 31.4118 86.8316 31.4098 86.7446 31.4088 86.6566C 31.6498 86.6566 31.8918 86.6566 32.1328 86.6566C 37.9618 86.6476 43.7918 86.6326 49.6148 86.3126C 50.1768 86.2816 50.8868 86.4726 51.2318 85.5056C 49.3048 84.8706 47.3438 85.4986 45.3858 85.2426C 45.5308 84.7786 45.6888 84.3756 45.7778 83.9566C 45.8638 83.5526 45.8238 83.1156 45.3438 82.9936C 44.9088 82.8836 44.7648 83.2576 44.6158 83.5906C 44.4628 83.9326 44.4078 84.3476 43.9398 84.5806C 43.3888 83.9006 42.9878 83.0136 41.9658 82.7516C 41.3358 83.8266 42.6438 84.3826 42.5728 85.3386C 40.6878 85.5646 38.8248 85.4866 36.9498 85.4716C 36.7328 84.6056 36.5738 83.8176 35.9118 83.2876C 35.6758 83.0996 35.4318 82.8506 35.0968 83.0566C 34.7328 83.2806 34.7478 83.6146 34.8738 83.9816C 35.0248 84.4206 35.3878 84.8146 35.1648 85.4236C 33.8148 85.4236 32.4468 85.4236 31.0968 85.4236C 31.0558 85.2596 31.0168 85.1756 31.0168 85.0916C 31.0058 73.2096 31.0038 61.3266 30.9708 49.4446C 30.9698 48.8656 31.2408 48.6016 31.6088 48.2706C 33.1398 46.8936 34.3528 45.3096 34.6248 43.1836C 34.8868 41.1396 35.1068 39.0956 35.1018 37.0266C 35.0958 34.8836 35.5058 32.8046 36.3158 30.7716C 36.8988 30.8296 37.4198 30.8746 37.9388 30.9356C 42.7598 31.5016 47.5798 32.0836 52.4028 32.6326C 54.5208 32.8736 54.8498 32.4236 54.1368 30.3726C 54.0518 30.1276 53.8878 29.9116 53.7728 29.6766C 52.4828 27.0406 50.6248 24.8816 48.0368 23.1066C 51.1038 19.9606 53.2438 16.2596 56.1248 13.1416C 56.5258 12.7116 56.9318 12.2856 56.7168 11.6486ZM 42.8558 13.2786C 43.5518 13.1766 44.1558 13.5336 44.6018 14.0316C 46.4788 16.1286 47.6428 18.5026 47.3148 21.4156C 47.2598 21.9036 47.1438 22.5086 46.6158 22.5156C 45.8028 22.5276 46.2698 21.8636 46.2108 21.4506C 46.0098 20.0406 45.5838 18.6836 44.4408 17.7556C 43.0238 16.6046 41.6018 15.4086 39.6578 15.2196C 39.5078 15.2046 39.3698 15.0736 39.1028 14.9306C 40.3038 14.0576 41.5028 13.4766 42.8558 13.2786ZM 47.4918 24.7826C 47.4598 25.8356 46.6248 26.3326 45.8608 26.9236C 46.0448 26.0486 45.9728 25.1746 46.0828 24.3226C 46.6468 24.1566 47.0188 24.4736 47.4918 24.7826ZM 40.4068 16.4016C 42.8368 17.1636 44.9508 18.4736 45.4748 21.3086C 45.4988 21.4376 45.5228 21.5676 45.5238 21.6976C 45.5248 21.7786 45.4818 21.8596 45.4358 22.0226C 43.6848 21.5496 41.9338 20.8416 40.0988 21.1156C 38.7238 21.3206 37.8088 21.0596 37.1858 19.7396C 36.7918 18.9046 35.8488 18.6776 35.0218 18.3896C 36.0918 16.4086 37.8988 15.6146 40.4068 16.4016ZM 30.2208 24.9446C 30.8418 22.5026 32.1208 20.7876 33.6628 19.2196C 34.1248 18.7506 34.5438 18.7786 35.0638 19.0456C 36.0308 19.5426 36.7648 20.2396 37.2258 21.4876C 34.6168 22.0866 32.5078 23.4666 30.2208 24.9446ZM 36.6148 23.5056C 35.4908 25.4746 34.6448 27.4596 32.8878 28.7186C 31.8158 29.4866 30.4458 28.9176 29.1988 29.0416C 29.3188 27.3176 33.5318 24.1636 36.6148 23.5056ZM 34.7018 16.3896C 33.9098 16.8516 33.2768 17.5866 32.5728 18.1986C 33.1888 16.4146 34.0838 14.8646 35.3538 13.4346C 35.9808 14.7056 35.9988 15.6336 34.7018 16.3896ZM 34.0548 8.90756C 34.4268 10.0146 34.7758 11.0706 35.1398 12.1216C 35.2898 12.5556 35.1378 12.8786 34.8378 13.1756C 33.7538 14.2496 32.8918 15.4906 32.0868 16.8056C 32.3238 14.1116 31.0898 11.0896 34.0548 8.90756ZM 33.4408 7.31456C 33.6288 7.79756 33.4758 8.13356 33.1778 8.49856C 32.7738 8.99456 32.4168 9.52756 31.7938 10.3816C 31.9678 7.55056 31.5688 5.16556 31.0698 2.42156C 32.1388 4.20056 32.8278 5.73756 33.4408 7.31456ZM 27.6268 5.07756C 28.3388 4.10456 29.0628 3.14056 29.9548 1.94056C 30.4348 5.04056 31.1838 7.78956 30.9448 10.6586C 30.6548 10.8736 30.5678 10.6446 30.4768 10.4566C 29.7318 8.91656 28.8788 7.44356 27.7598 6.13956C 27.4738 5.80756 27.3458 5.46156 27.6268 5.07756ZM 26.9748 6.44356C 28.3118 7.91956 29.1838 9.57756 29.8778 11.3636C 27.2758 8.44656 26.6348 7.37556 26.9748 6.44356ZM 26.0438 8.20756C 28.2388 11.4756 31.2738 14.1606 30.8528 18.8806C 28.3438 16.4176 26.9228 13.5056 24.2658 11.5066C 24.8638 10.3956 25.3998 9.40256 26.0438 8.20756ZM 23.7928 12.6476C 24.7778 13.2036 25.4098 14.0076 26.0858 14.7196C 27.4398 16.1466 28.6888 17.6736 29.9838 19.1576C 30.5368 19.7916 30.5998 20.4766 30.2388 21.2256C 29.6138 22.5216 29.1188 23.8696 28.5718 25.2976C 27.6348 21.6626 26.0138 18.4276 23.4898 15.6366C 22.6068 14.6616 23.5178 13.7006 23.7928 12.6476ZM 27.2278 25.2636C 25.8328 23.6346 24.3968 22.6286 22.6998 22.0216C 22.4858 21.9446 22.3338 21.7636 22.4028 21.5096C 22.9868 19.3436 21.9188 17.4436 21.3758 15.3316C 24.3328 17.9876 26.4208 21.0136 27.2278 25.2636ZM 26.7068 30.1316C 23.5638 26.4266 19.7738 23.7876 15.7448 21.3566C 19.9848 21.8736 24.1278 22.5736 27.0818 26.2836C 28.2898 27.8026 27.0738 28.7466 26.7068 30.1316ZM 21.2808 21.2796C 20.5998 21.3926 20.2288 21.1236 20.1558 20.4296C 19.8418 17.4266 18.8988 14.6646 16.7688 12.1426C 20.4918 13.7736 21.3028 16.2756 21.2808 21.2796ZM 9.58881 17.3776C 7.19481 15.8026 5.24481 13.7276 2.56081 12.0626C 3.44381 11.8346 3.93781 11.6356 4.44481 11.5916C 5.42181 11.5076 6.43681 10.5826 7.37881 11.5186C 9.65681 13.7806 10.1688 15.1756 9.58881 17.3776ZM 8.02781 10.9546C 9.92281 10.6396 10.7168 11.7816 10.8888 14.8446C 10.4468 13.2526 9.26181 12.1996 8.02781 10.9546ZM 11.4928 18.7076C 12.4938 15.9426 12.1058 13.4146 10.6058 10.9056C 12.8598 10.6686 14.7868 10.8576 16.2908 12.8456C 18.0058 15.1126 19.1458 17.5106 19.1238 20.7316C 16.5628 19.7446 13.5978 21.2746 11.4928 18.7076ZM 2.11081 28.2196C 3.30181 26.9866 4.34081 25.9046 5.39081 24.8336C 5.50681 24.7156 5.71281 24.5586 5.83181 24.5906C 8.58881 25.3246 11.0958 26.5016 12.9798 28.7846C 9.39881 28.5946 5.85081 28.7776 2.11081 28.2196ZM 13.5248 27.8076C 11.9068 26.2236 9.88181 25.1566 7.85981 24.1346C 7.64481 24.0256 7.32381 24.0676 7.26781 23.7286C 9.59981 22.7566 13.6258 25.0086 17.1838 29.3376C 15.6038 29.4206 14.5618 28.8216 13.5248 27.8076ZM 21.4128 29.6116C 19.2938 29.8566 17.7968 29.2356 16.6988 27.3146C 15.4398 25.1116 13.2268 24.0786 10.9318 23.2476C 10.5318 23.1026 10.1378 22.9416 9.47681 22.6856C 11.9088 21.3746 14.1078 21.8826 16.0348 22.8246C 19.1808 24.3616 21.8998 26.5986 24.4438 29.0156C 24.5978 29.1616 24.7038 29.3586 25.0038 29.7656C 23.6748 29.6956 22.5248 29.4826 21.4128 29.6116ZM 29.7378 86.7716C 28.6618 86.9466 27.5858 86.8586 26.3418 86.8146C 26.4398 86.2906 26.5098 85.9146 26.6098 85.3756C 27.6768 86.8156 28.6918 86.4526 29.6698 85.3816C 29.9448 85.8876 29.8558 86.2996 29.7378 86.7716ZM 26.6348 81.7496C 27.1648 82.0986 27.5168 82.6256 28.0988 82.8096C 28.7448 83.0146 29.1458 82.5466 29.6178 82.2686C 30.0548 83.5146 29.8068 83.9286 27.9088 85.0616C 27.4158 84.0086 26.2678 83.2506 26.6348 81.7496ZM 29.5218 80.9706C 28.6058 82.1216 28.1968 82.0866 27.4398 80.8276C 26.9388 79.9946 26.1498 79.2716 26.7468 78.0986C 27.6378 78.6536 28.4058 79.7286 29.7738 79.2886C 29.9328 80.0316 29.8858 80.5126 29.5218 80.9706ZM 28.3388 70.2856C 26.4758 69.4326 26.2868 68.9416 26.7338 66.2236C 28.5808 66.7266 28.5808 66.7266 29.7448 66.2996C 30.3588 68.1046 29.2458 69.1526 28.3388 70.2856ZM 28.5068 73.8606C 27.4678 72.9366 26.3658 72.3146 26.6628 70.6946C 27.6788 71.1846 28.7178 71.9566 29.6308 70.4736C 30.4248 72.0356 29.1418 72.7126 28.5068 73.8606ZM 28.3768 57.3496C 27.1558 56.5536 26.1218 55.6866 26.7258 53.9216C 27.6898 54.4216 28.6838 55.0546 29.6838 53.8396C 30.2918 55.4896 29.6018 56.4996 28.3768 57.3496ZM 27.9208 60.9516C 26.6228 60.1236 26.3798 59.0926 26.7308 57.7216C 27.6808 58.4546 28.5908 59.3206 29.7018 57.9136C 30.3058 59.7966 28.4818 59.9146 27.9208 60.9516ZM 28.2388 53.4106C 26.5158 52.7676 26.3878 51.4136 26.6218 49.7566C 27.7068 49.8266 28.6828 49.6706 29.6688 49.3856C 30.4008 51.2386 29.3518 52.3306 28.2388 53.4106ZM 28.9728 78.0116C 27.4498 77.3296 26.5298 75.8336 26.6598 74.1036C 27.6498 74.6806 28.6338 75.3356 29.8418 74.1556C 29.8878 75.7816 30.2068 77.0856 28.9728 78.0116ZM 29.5838 64.5176C 29.2898 65.0766 28.9848 65.7846 28.1248 65.5146C 27.3418 65.2686 26.6868 64.8206 26.6118 63.9106C 26.5588 63.2616 26.6018 62.6056 26.6018 61.7806C 27.7348 62.5656 27.7348 62.5656 29.7888 61.1836C 29.8768 62.3486 30.1398 63.4626 29.5838 64.5176ZM 29.4838 47.0686C 29.3778 47.5606 29.9368 47.5076 29.9208 47.8456C 27.6008 48.9186 26.9778 48.8676 25.8068 47.5056C 26.1408 47.2066 26.5498 47.3956 26.9168 47.3316C 27.2548 47.2726 27.6188 47.2966 27.9108 46.9406C 27.4158 46.4376 26.7818 46.5896 26.2108 46.5806C 24.3048 46.5506 24.1188 46.3926 23.8068 44.3326C 26.7128 44.4206 29.6028 44.6726 32.5168 44.5686C 32.3478 46.1976 32.3478 46.1976 29.4838 47.0686ZM 32.1908 41.7936C 30.0108 41.7186 27.8348 41.3106 25.6468 41.6926C 25.1818 41.7736 24.7138 41.8406 23.8638 41.9746C 27.1498 42.4326 30.0598 42.5706 32.9348 42.4706C 33.2618 43.5306 32.7738 43.6846 32.0368 43.7026C 29.3218 43.7676 26.6258 43.2556 23.9078 43.4436C 23.3658 43.4806 23.2268 43.1176 23.2118 42.6986C 23.1858 41.9606 23.2048 41.2216 23.2048 40.2816C 26.6268 40.2326 29.9178 40.7966 33.2148 40.2916C 33.5118 41.3926 33.2208 41.8296 32.1908 41.7936ZM 31.9698 39.8206C 30.5398 39.6656 29.1068 39.5026 27.6708 39.4366C 26.2408 39.3716 24.8048 39.4226 23.3988 39.4226C 23.0398 38.9296 23.1448 38.4706 23.2608 37.9236C 26.6478 37.6636 30.0238 38.4086 33.4858 38.0056C 33.6488 39.8046 33.4668 39.9826 31.9698 39.8206ZM 32.8788 36.9186C 29.7098 36.5406 26.5268 36.5516 23.3428 36.5546C 23.2968 36.5546 23.2498 36.4276 23.2008 36.3546C 23.2768 35.8266 23.6848 35.9686 24.0068 35.9686C 26.9288 35.9636 29.8518 35.9656 32.7738 35.9626C 33.1528 35.9626 33.6148 35.8116 33.6158 36.4486C 33.6158 36.9796 33.2278 36.9596 32.8788 36.9186ZM 23.2618 33.5126C 22.9178 33.5166 22.9118 33.0756 23.0318 32.6346C 26.5718 32.6896 30.1308 33.0726 33.7028 32.9226C 33.7058 33.0526 33.7088 33.1836 33.7118 33.3136C 30.2288 33.3876 26.7458 33.4766 23.2618 33.5126ZM 32.7298 31.9316C 32.0748 31.8876 31.4148 31.9006 30.7588 31.8766C 30.1028 31.8516 29.4478 31.8106 28.7918 31.7776C 30.6528 31.4666 32.5158 31.4806 34.5608 31.5226C 33.9528 32.4396 33.3108 31.9706 32.7298 31.9316ZM 34.3058 29.0966C 35.1968 27.8496 36.0958 26.6086 36.9728 25.3526C 37.2208 24.9986 37.5018 24.6236 37.6028 24.2176C 37.9238 22.9246 38.8058 22.6746 40.2598 22.8046C 38.6528 25.4766 36.9398 27.6976 34.3058 29.0966ZM 41.1078 29.9466C 39.5418 29.7816 37.9778 29.5906 36.0458 29.3686C 38.1608 27.4636 39.6078 25.4086 40.7388 23.1286C 40.9008 22.8026 41.1538 22.6676 41.4818 22.7246C 42.5598 22.9126 43.6318 23.1196 44.6638 23.5086C 45.2888 23.7446 45.1938 24.2416 45.1628 24.7116C 45.0648 26.1916 44.4628 27.4966 43.6918 28.7286C 43.0998 29.6746 42.2048 30.0626 41.1078 29.9466ZM 48.3408 25.2736C 50.3358 26.9266 51.8018 28.8516 52.8188 31.5276C 49.7778 31.0426 47.0578 30.6096 44.1418 30.1446C 45.8518 28.6456 47.0928 26.9986 48.3408 25.2736ZM 48.1878 20.3786C 48.1348 17.2876 46.6128 15.0326 44.3908 12.9856C 46.1148 12.4446 47.8178 12.3256 49.5418 12.3456C 50.1798 12.3526 50.1798 12.8226 50.1978 13.2666C 50.2318 14.0966 50.1538 14.9466 50.3038 15.7536C 50.6798 17.7696 49.8908 19.1996 48.1878 20.3786ZM 51.3088 16.5116C 51.2338 15.1916 51.1588 13.8716 51.0848 12.5516C 51.8288 13.8236 51.8738 15.1466 51.3088 16.5116ZM 52.5718 14.9706C 52.3868 14.0296 52.2338 13.2476 52.0558 12.3416C 52.9768 12.3416 53.8118 12.3416 54.8428 12.3416C 54.0438 13.2676 53.3668 14.0506 52.5718 14.9706Z"/>
				<path id="path1_fill" d="M 28.117 0.00879537C 26.63 0.0137954 25.143 0.0607989 23.656 0.0717989C 16.308 0.124799 8.958 -0.180198 1.613 0.232802C 1.079 0.262802 0.456999 0.079801 -9.15527e-07 0.734801C 0.532999 1.1838 1.161 1.08079 1.743 1.07979C 5.899 1.07179 10.054 1.1508 14.21 1.2368C 18.843 1.3328 23.484 1.4518 28.116 1.1108C 28.544 1.0798 29.113 1.1268 29.117 0.532797C 29.121 -0.108203 28.524 0.00779537 28.117 0.00879537Z"/>
				</defs>
			</svg>

		</footer>
		<!-- End Footer -->


		<?php wp_footer(); ?>

		<script>
			var message = "<?php wp_reset_query(); echo the_title(); ?>";
			
			// INJECT CONTENT ON TITLES
			var title = document.querySelector(".header-blog__title");
			function injection(content) {
				for (var i = 0; i < content.length; i++) {
			  		title.innerHTML += "<span>" + content[i] + "</span>";
				}
			}

			injection(message);


		</script>

	</body>
</html>