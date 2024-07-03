<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="margin: 50px;">
    <h1>Report</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
    
      <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "report";

        //Create Connection
        $connection = new mysqli($servername, $username, $password, $database);

        //Check Connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        //Read all row from database table
        $sql = "SELECT * FROM stock";
        $result = $connection->query($sql);

        if (!$result){
            die("Invalid query: " . $connection->connect_error);
        }

        //read data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td> ". $row["ID"] . " </td>
            <td> ". $row["Product_Name"] . " </td>
            <td> ". $row["Price"] . " </td>
            <td> ". $row["Stock_Quantity"] . " </td>
    
            <td>
                <a class='btn btn-primary btn-sm' href='update'>Update</a>
                <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
            </td>    
        </tr>";
        }

        ?>
      </tbody>
    </table> 
    
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}

			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};

			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>