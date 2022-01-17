<script type="text/javascript">
	$(document).ready(function(){
		my_chart();
	});

const my_chart =()=>{
	$.ajax({
		url: '../../process/processor.php',
		type: 'POST',
		data:{
			method: 'chart'
		},success:function(data){
			$('#sales_data').html(data);
		
		
				chart();
		}
	});
}

function chart() {
		var branch = [];
		$('.branch').each(function(){
			branch.push($(this).html());
		});

		var sales = [];
		$('.sales').each(function(){
			sales.push($(this).html());
		});

		
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
				    type: 'bar',
				    data: {
			        labels: branch,sales,
			        datasets: [{
		            label: 'sales',
		            data: sales,
		            backgroundColor: [
                 			'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                			 'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
            indexAxis: 'x'
    }
});
		
	}


</script>