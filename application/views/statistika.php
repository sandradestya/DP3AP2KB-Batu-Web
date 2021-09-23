<script src="<?php echo base_url()?>assets/highcharts/highcharts.js"></script> 
<script src="<?php echo base_url()?>assets/highcharts/modules/exporting.js"></script> 
<script src="<?php echo base_url()?>assets/highcharts/modules/offline-exporting.js"></script> 

<section class="projects_w3ls">
  <div class="container">
    <div class="wthree_head_section">
      <h2 class="w3l_header">Statistika</h2>
      <p>Berikut Merupakan Statistika Perbandingan Jumlah Penduduk Tiap Desa di Kota Batu</p>
    </div>

    <div class="col-md-2"></div>
    <div class="container col-md-12" id="grafikOt"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
  </div>
</section>

<?php foreach ($graph as $key ) {
$village_name[] = $key->village_name;
$jumlah[]  = (float)$key->jumlah;
}
?>
<!-- Script untuk memanggil library Highcharts -->
 <script type="text/javascript">
  
  var chart = Highcharts.chart('grafikOt', {
     chart: {
                  type: 'line',
                  height: 400  
     },
   

      title: {
       text: 'Perbandingan Jumlah Penduduk Antar Desa',
       style: {
               fontSize: '18px',
               fontFamily: 'Verdana, sans-serif'
               }
       },
            
            plotOptions:{
     series:{
      dataLabels:{
        enabled: true,
        style:{
          fontSize: '12px'
        }
      }
    }
  },
         credits: {
                enabled: false
          },
         xAxis: {
                categories:  <?php echo json_encode($village_name);?>,
    labels: {
      style: {
        fontSize: '12px',
      }
    }

  },

   yAxis: 
  {
    title: {
      text: 'jumlah',
      style: {
                    fontSize: '12px',
                    fontFamily: 'Verdana, sans-serif'
                  }
     },
    labels: {
      style: {
        fontSize: '11px'
      }
    },


   },

  series: [
  {
           name: 'Jumlah Penduduk',
          color: 'blue',
           data: <?php echo json_encode($jumlah);?>
  }
  ],
  navigation: {
        menuItemStyle: {
            fontSize: '10px'
        },
        buttonOptions: {
            theme: {
                // Good old text links
                style: {
                    color: '#039',
                    textDecoration: 'underline',
                    fontSize: '12px',
                }
            }
        }
    }
   
     

    });

</script>