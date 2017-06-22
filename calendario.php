<?php 
	include("php/conectardb.php");
	include('php/session.php');
	$userDetails=$userClass->userDetails($session_uid);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8' />
	
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
		
	<script type="text/javascript" src="js/javascript.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>

	<!--Calendar-->
	<link href='css/fullcalendar.min.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='js/moment.min.js'></script>
	<script src='js/jquery.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/locale-all.js'></script>
	<script>

	 $(document).ready(function() {
		var initialLocaleCode = 'pt-br';
	  	var date = new Date();
	  	var d = date.getDate();
	  	var m = date.getMonth();
	  	var y = date.getFullYear();

	  	var calendar = $('#calendar').fullCalendar({
	  		editable: true,
	   		header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
	   		},
		  	locale: initialLocaleCode,
	  		events: "calendario/events.php",

	   		// Convert the allDay from string to boolean
	   		eventRender: function(events, element, view) {
				if (events.allDay === 'true') {
		 			events.allDay = true;
				} 
				else {
		 			events.allDay = false;
				}
	   		},
	   		selectable: true,
	   		selectHelper: true,
	   		select: function(start, end, allDay) {
				var title = prompt('Nome do Evento:');
				var url = prompt('Digite um site para anexar, se quiser:');
				if (title) {
					var start = $.fullCalendar.moment(start).format();
					var end = $.fullCalendar.moment(end).format();;
					$.ajax({
						url: 'calendario/add_events.php',
						data: {'title': title, 'start': start, 'end': end, 'url': url} ,
						type: "POST",
						success: function(results) {
							alert('Adicionado com sucesso');
							console.log(results);
						}
					});
					calendar.fullCalendar('renderEvent',{
						title: title,
						start: start,
						end: end,
						allDay: allDay
					},
					true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
	   		},
			
			eventClick: function(event) {
				var decision = confirm("Deseja excluir o evento ?"); 
				if (decision) {
					$.ajax({
						type: "POST",
						url: "calendario/delete_events.php",
						data: {'id':event.id},
						success: function(results) {
							alert('Removido com sucesso');
						}
					});
					$('#calendar2').fullCalendar('removeEvents', event.id);

				}
			},

	   	editable: true,
	   	eventDrop: function(event, delta) {
	   		var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
	   		var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
	   		$.ajax({
	   			url: 'calendario/update_events.php',
	   			data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	   			type: "POST",
	   			success: function(json) {
					alert("Atualizado com sucesso");
	   			}
	   		});
	   	},
	   	eventResize: function(event) {
	   		var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
	   		var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
	   		$.ajax({
				url: 'calendario/update_events.php',
				data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
				type: "POST",
				success: function(json) {
		 			alert("Atualizado com sucesso");
				}
	   		});

		}

	  });
		 
	 });

	</script>
	<style>
		
	 #calendar {
	  width: 900px;
	  margin: 0 auto;
	  }
	
		#icone{
			margin-left:750px;
			width:80px;
			height:80px;
			border:0;
			
		}
		
		#icone2{
			margin-left:500px;
			width:80px;
			height:80px;
			border:0;
			
		}
		
		#icons{
			height: 111px;
		}
		
		#texto{
			margin-top: -90px;
			color: aliceblue;
		}
	</style>
	<!--Calendar-->
</head>
	<body>
		<nav class="menu">
			<div id="icons">
				<br>
				<img id="icone2" src="calendario/icon.png">
				<a href="chat.php"> <img id="icone" src="../projeto_dw/chat/icon.png"> </a>
			</div>
			<div>
				<br>
				<h1 id="texto" align="center">Calendário</h1>
			</div>
		</nav>
		<br>
		<div id="calendar"></div>
	</body>
</html>