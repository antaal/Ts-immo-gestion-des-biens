<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
    body {
        background: #f9f9f9;
        font-family: "Roboto", sans-serif;
    }

    .main-content {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .table {
        border-spacing: 0 15px;
        border-collapse: separate;
    }
    .table thead tr th,
    .table thead tr td,
    .table tbody tr th,
    .table tbody tr td {
        vertical-align: middle;
        border: none;
    }
    .table thead tr th:nth-last-child(1),
    .table thead tr td:nth-last-child(1),
    .table tbody tr th:nth-last-child(1),
    .table tbody tr td:nth-last-child(1) {
        text-align: center;
    }
    .table tbody tr {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    .table tbody tr td {
        background: #fff;
    }
    .table tbody tr td:nth-child(1) {
        border-radius: 5px 0 0 5px;
    }
    .table tbody tr td:nth-last-child(1) {
        border-radius: 0 5px 5px 0;
    }

    .user-info {
        display: flex;
        align-items: center;
    }
    .user-info__img img {
        margin-right: 15px;
        height: 55px;
        width: 55px;
        border-radius: 45px;
        border: 3px solid #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .active-circle {
        height: 10px;
        width: 10px;
        border-radius: 10px;
        margin-right: 5px;
        display: inline-block;
    }   
</style>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <title>TS-immo proprietes</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="main-content">
		<div class="container">
			<div class="d-flex justify-content-between">
                <h1>Propriete</h1>
                <a class="btn btn-lg btn-success" href="/create">
                    Ajouter
                </a>
            </div>
			<br>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Proprietaire</th>
						<th>Propriété</th>
						<th>Montant</th>
						<th>Surface</th>
						<th>Statut</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                @foreach($Proprietes as $Propriete)
					<tr>
						<td>
							<div class="user-info">
								<div class="user-info__img">
									<img src="user1.jpg" alt="User Img">
								</div>
								<div class="user-info__basic">
									
									<p class="text-muted mb-0">{{$Propriete['proprietaire_id']}}</p>
								</div>
							</div>
						</td>
                        <td> {{$Propriete['type_propriete_id']? "Appartement" : "Studio"}} </td>
                        {{-- <td>{{$Propriete['quartier_id']}} </td> --}}
                       
                        <td>{{$Propriete['montant']}}</td>
						<td>{{$Propriete['surface']}}</td>

                        <td>{{$Propriete['statut']? "Disponible" : "Non Disponible"}}</td>

						<td>
							<div class="dropdown open">
								<a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="triggerId1">
									<a class="dropdown-item" href="/edit"><i class="fa fa-pencil mr-1"></i> Edit</a>
									<a class="dropdown-item text-danger" href="/destroy"><i class="fa fa-trash mr-1"></i> Delete</a>
									<a class="dropdown-item text-danger" href="/show"><i class="fa fa-eye mr-1"></i> Detail</a>


								</div>
							</div>
						</td>
					</tr>
                @endforeach
					
				</tbody>
			</table>
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>