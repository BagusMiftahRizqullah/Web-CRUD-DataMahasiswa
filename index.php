<!DOCTYPE html>
<html>
<head>
    <title>FORM Biodata</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
            <p>
            <h1>Biodata Mahasiswa</h1>
            </p>
            <a href="tambahdata.php">Add New User</a><br/><br/>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
                        
        <table width='50%' >
    <thead>
    <tr class="row100 body">
									<th class="cell100 column1">No</th>
									<th class="cell100 column2">Nim</th>
									<th class="cell100 column3">Nama</th>
									<th class="cell100 column4">Alamat</th>
                                    <th class="cell100 column5">No Telpon</th>
                                    <th class="cell100 column6">Pendidikan</th>
                                    <th class="cell100 column7">Jenis Kelamin</th>
                                    <th class="cell100 column8"></th>
								</tr>
                            </thead>
	                </table>
                </div>
    <div class="table100-body js-pscroll">
	<table>
	    <tbody>
	        <tr class="row100 body">
    <?php 
    include 'conn.php';
    $no = 1; 
    $data = mysqli_query($conn,"SELECT * from biodata");
    while($user_data = mysqli_fetch_array($data)) {         
        echo "<tr>";
        echo "<td class=cell100 column1>".$no++."</td>";
        echo "<td class=cell100 column1>".$user_data['nim']."</td>";
        echo "<td class= cell100 column1>".$user_data['nama']."</td>";
        echo "<td class=cell100 column1>".$user_data['alamat']."</td>"; 
        echo "<td class=cell100 column1>".$user_data['no_telpon']."</td>"; 
        echo "<td class=cell100 column1>".$user_data['pendidikan']."</td>"; 
        echo "<td class=cell100 column1>".$user_data['jenis_kelamin']."</td>";     
        echo "<td><a href='update.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tr>
        </tbody>
    </table>
    
    </div>	
</div>
<h2>Create by : Miftah</h2>
         

</body>
</html>