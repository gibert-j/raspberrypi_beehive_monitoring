<!DOCTYPE html>
<html>
    <head>
        <style>
            body { background-color: black; }
            h1 { color: red;
            text-align: center;
                 font-size: 48;
            }
            h2 { color: white;
            text-align: center;
            }
            iframe {
            display: block;
            margin: 0 auto;
            }


        </style>
    </head>
	<body>
            <h1> Enviro pHat v0.1</h1>
            <h2>Temperature = <?php echo (exec('sudo /home/pi/temp.py')."°");?></h2>
            <h2>Barometer   = <?php echo (exec('sudo /home/pi/pressure.py'));?></h2>
            <h2>Light Level = <?php echo (exec('sudo /home/pi/light.py'));?></h2>
            <iframe src="http://localhost:8081" height="1280px"
            width="720px" style="border:none";></iframe>
	</body>
</html>
