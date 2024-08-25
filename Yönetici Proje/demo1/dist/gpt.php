<?php
if (isset($_POST['prompt']) or isset($_POST['dataType'])) {
   include('php/settings.php');

    // Google Gemini API anahtarı
    $YOUR_API_KEY = "AIzaSyCED9KyO5krpwvewC3fCWM9MpoVG7laN4A"; // API anahtarınızı buraya yerleştirdim
// Request prompt
$table = $_POST['table'];
if ($table == 'all') {
  $table = $table . ' Tüm tabloları kullanarak cevap ver';
} else {
  $table = 'Sadece şu tabloyu kullanarak cevap ver :' . $table;
}

if(isset($_POST['dataType'])) {
    $dataTime = $_POST['dataTime'];
    $prompt = "Bu mesajım: Aşağıda vereceiğim ".$_POST['table']." tablosundaki verileri incele ve bu verilere göre ".$dataTime." aylık bir ".$_POST['dataName']."'ine göre  tahmini yap. 
 Bunlarda uyman gereken kurallar: 
 CEVABINI HTML KODLARIYSA SÜSLE RENKLİ VE OKUNUR HALE GETİR. YAZILARI ÇOK BÜYÜTME, SATIR ARALARINI DAR TUT GENİŞ OLMASIN. YUMUŞAK CANLI RENKLER KULLAN RENKLERİ SADECE ÖNEMLİ YERLERDE BAŞLIKLARDA KULLAN. LINE HEİGHT 10PX OLSUN.RENKLI YAZI KULLANACAĞIN ZAMAN #9966CC BU KODLU RENGİ KULLAN SADECE YAZIYLA İLGİLİ ETİKETLERİ EKLE CSS İ ETİKETİN İÇİNE YAZ VE ASLA <HTML>, <HEAD>, <BODY>, <DİV> ASLA KULLANMA. BUNLAR GİBİ YAZI ETİKETİ DIŞINDA ETİKET KULLANMA
 CEVAP İÇİNDE DIV KULLANAMAZSIN. CEVAP İÇİNDE <STYLE> KULLANAMAZSIN. CEVAP İÇİNDE <HEAD> VE <BODY> KULLANAMAZSIN
 '<div>' Kullanman Yasak!. '<br>' etiketi  Kullanman Yasak. 
 EĞER SAYI GÖSTERECEKSEN VE BU SAYI ADET SAYISI İSE SONUNA ADET YAZABİLİRSİN. 
GÖSTERDİĞİN VERİYİ AÇIKLAYAN KISA BİR YAZIDA YAZ. NEYİ GÖSTERDİĞİNİ AÇIKLA. NEYİ GÖSTERDİĞİNİ AÇIKLAMAK ZORUNDASIN.
 ASLA CEVAP OLARAK SORU SORMA SENDEN TAHMİN ETMEN İSTENİLDİYSE TAHMİN ET. ASLA ELİMDE YETERLİ VERİ YOK VB ŞEYLER SÖYLEME TAHMİN ET SADECE BİREBİR DOĞRU OLMAK ZORUNDA DEĞİL.
 ASLA AYNI VERİYİ YAZMA TAHMİN YAPMAN İSTEMİŞSE KAÇ AY SONRASI İSTENDİYSE O AY İÇİN BİR TAHMİN OLUŞTUR DOĞRU OLMAK ZORUNDA DEĞİL SADECE TAHMİN ET.
Cevabı sadece 'Türkçe' olarak yaz! Cevap her zaman aşağıda verilen veritabanı tabloları ve içindeki verilerle ilgili olmak zorunda. ASLA YORUM SATIRI YAZMA, 
BAŞLIK YAZMA, HİÇBİR ŞEYİ AÇIKLAMA, ** AÇIKLAMA ** GİBİ ÇARPMA İŞARETİ İÇİNDE YAZI OLAN AÇIKLAMALAR YAZMA!
Yorum satırı asla kullanma!
Başlıkları aynı olan birden fazla kayıt varsa aynı başlığı olan verilerin adetlerini toplayarak göster.
Eğer veride ürün varsa başlıklar için ürün adını kullanmak zorundasın. Sayılar için adet bilgilerini kullan.
Sana verilmemiş bir veriyi asla ekleme.
ASLA AMA ASLA KENDİN VERİ OLUŞTURMA SANA NE VERDİYSEM ONU KULLAN ASLA RASTGELE VERİ OLUŞTURMA.
SADECE SANA VERİLEN VERİLERİ DEĞERLERİ KULLAN.
Sadece sana verilen verileri ve değerleri kullan.
Sana vermediğim bir veriyi görmek istemiyorum kafanda bölüm adı ürün adı uydurma her şey sana verilen verilerle ilgili olmak zorunda.
Tablolar ve veriler şunlardır:\n";

$post_table = $_POST["table"];
if ($post_table !== "all") {
    // Geçerli bir tablo adı olduğundan emin olun
    if (preg_match('/^[a-zA-Z0-9_]+$/', $post_table)) {
        // Belirtilen tablonun sütunlarını almak için sorgu
        $sql_columns = "SHOW COLUMNS FROM " . $post_table;
        $result_columns = $con->query($sql_columns);

        if ($result_columns) {
            if ($result_columns->num_rows > 0) {
                $prompt .= "Tablo : $post_table\nSütunlar:\n";
                while ($row_column = $result_columns->fetch_assoc()) {
                    $column_name = $row_column['Field'];
                    $prompt .= "- $column_name\n";
                }
                $prompt .= "\nVeriler:\n";

                // Tablo verilerini almak için sorgu
                $sql_data = "SELECT * FROM " . $post_table;
                $result_data = $con->query($sql_data);

                if ($result_data) {
                    if ($result_data->num_rows > 0) {
                        while ($row_data = $result_data->fetch_assoc()) {
                            $prompt .= json_encode($row_data, JSON_UNESCAPED_UNICODE) . "\n";
                        }
                    } else {
                        $prompt .= "Table is empty.\n";
                    }
                } else {
                    $prompt .= "Error fetching data: " . $con->error . "\n";
                }
            } else {
                $prompt .= "No columns found in the table.\n";
            }
        } else {
            $prompt .= "Error fetching columns: " . $con->error . "\n";
        }
    } else {
        $prompt .= "Invalid table name.\n";
    }
} else {
    $sql = "SHOW TABLES";
    $result = $con->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_row()) {
                $table_name = $row[0];
                $prompt .= "Table: $table_name\n";

                // Tablo sütunlarını almak için sorgu
                $sql_columns = "SHOW COLUMNS FROM " . $table_name;
                $result_columns = $con->query($sql_columns);

                if ($result_columns) {
                    if ($result_columns->num_rows > 0) {
                        $prompt .= "Columns:\n";
                        while ($row_column = $result_columns->fetch_assoc()) {
                            $column_name = $row_column['Field'];
                            $prompt .= "- $column_name\n";
                        }
                        $prompt .= "\nData:\n";

                        // Tablo verilerini almak için sorgu
                        $sql_data = "SELECT * FROM " . $table_name;
                        $result_data = $con->query($sql_data);

                        if ($result_data) {
                            if ($result_data->num_rows > 0) {
                                while ($row_data = $result_data->fetch_assoc()) {
                                    $prompt .= json_encode($row_data, JSON_UNESCAPED_UNICODE) . "\n";
                                }
                            } else {
                                $prompt .= "Table is empty.\n";
                            }
                        } else {
                            $prompt .= "Error fetching data: " . $con->error . "\n";
                        }
                    } else {
                        $prompt .= "No columns found in the table.\n";
                    }
                } else {
                    $prompt .= "Error fetching columns: " . $con->error . "\n";
                }
            }
        } else {
            $prompt .= "No tables found.";
        }
    } else {
        $prompt .= "Error fetching tables: " . $con->error . "\n";
    }
}

}
else {
$grafik = $_POST['grafik'];
if ($grafik == 0) {
  $grafik = "Yazı İle cevap ver.";
} else {
  $grafik = ucfirst($grafik) . " Grafiği ile oluştur.";
}
$prompt = "Bu mesajım: '" . $_POST['prompt'] . ". Bu isteği " . $grafik . ".' Bunlarda uyman gereken kurallar: 
Cevabı sadece 'Türkçe' olarak yaz! Cevap her zaman aşağıda verilen veritabanı tabloları ve içindeki verilerle ilgili olmak zorunda. ASLA YORUM SATIRI YAZMA, 
BAŞLIK YAZMA, HİÇBİR ŞEYİ AÇIKLAMA, ** AÇIKLAMA ** GİBİ ÇARPMA İŞARETİ İÇİNDE YAZI OLAN AÇIKLAMALAR YAZMA!
Aşağıda sana 3 grafik kodu vereceğim, eğer senden grafik oluşturman istenmediyse oluşturma.
Yorum satırı asla kullanma!
Grafiklerin verisi sana mesajda vereceğim veritabanı tablolarından oluşmak zorunda.
Başlıkları aynı olan birden fazla kayıt varsa aynı başlığı olan verilerin adetlerini toplayarak göster.
Eğer veride ürün varsa başlıklar için ürün adını kullanmak zorundasın. Sayılar için adet bilgilerini kullan.
Sana verilmemiş bir veriyi asla ekleme.
İstenilen tablonun verileri dışında başka tablodan asla veri ekleme.
Her zaman tüm kodu oluştur, asla yarım ya da sadece data kısmını oluşturma. Her zaman tüm kod oluşmalı.
Eğer istenilen tablo adı calisan ise başlık ad değer maas olacak.
Eğer istenilen tablo adı calisan ise ve istenilen bolum ve ya gorev ise başlık bolum ya da gorev hangisi istendiyse değer ise orda çalışsan kişi sayısı.
Eğer istenilen tablo adı gelir ise başlık gelirAd değer gelirTutar olacak.
Eğer istenilen tablo satis ise başlık urun_no değer adet olacak.
Eğer istenilen tablo siparisler ise başlık urun_no değer adet olacak.
Eğer istenilen tablo urun ise başlık urun_no değer urun_adet olacak.
ASLA AMA ASLA KENDİN VERİ OLUŞTURMA SANA NE VERDİYSEM ONU KULLAN ASLA RASTGELE VERİ OLUŞTURMA.
SADECE SANA VERİLEN VERİLERİ DEĞERLERİ KULLAN.
Sadece sana verilen verileri ve değerleri kullan.
Sana vermediğim bir veriyi görmek istemiyorum kafanda bölüm adı ürün adı uydurma her şey sana verilen verilerle ilgili olmak zorunda.
Eğer Çubuk Grafiği oluşturman istenirse, şu kodu kullanarak oluştur:
<!-- Resources -->

<!-- Chart code -->
<script>
am5.ready(function() {
    var root = am5.Root.new('chartdiv');
    root.setThemes([ am5themes_Animated.new(root) ]);
    var chart = root.container.children.push(am5xy.XYChart.new(root, { panX: true, panY: true, wheelX: 'panX', wheelY: 'zoomX', pinchZoomX: true, paddingLeft:0, paddingRight:1 }));
    var cursor = chart.set('cursor', am5xy.XYCursor.new(root, {}));
    cursor.lineY.set('visible', false);

    var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30, minorGridEnabled: true });
    xRenderer.labels.template.setAll({ rotation: -90, centerY: am5.p50, centerX: am5.p100, paddingRight: 15 });
    xRenderer.grid.template.setAll({ location: 1 });
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, { maxDeviation: 0.3, categoryField: 'country', renderer: xRenderer, tooltip: am5.Tooltip.new(root, {}) }));
    var yRenderer = am5xy.AxisRendererY.new(root, { strokeOpacity: 0.1 });
    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, { maxDeviation: 0.3, renderer: yRenderer }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root, { name: 'Series 1', xAxis: xAxis, yAxis: yAxis, valueYField: 'value', sequencedInterpolation: true, categoryXField: 'country', tooltip: am5.Tooltip.new(root, { labelText: '{valueY}' }) }));
    series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
    series.columns.template.adapters.add('fill', function (fill, target) { return chart.get('colors').getIndex(series.columns.indexOf(target)); });
    series.columns.template.adapters.add('stroke', function (stroke, target) { return chart.get('colors').getIndex(series.columns.indexOf(target)); });

    var data = [{ country: 'USA', value: 2025 }, { country: 'China', value: 1882 }, { country: 'Japan', value: 1809 }, { country: 'Germany', value: 1322 }, { country: 'UK', value: 1122 }, { country: 'France', value: 1114 }, { country: 'India', value: 984 }, { country: 'Spain', value: 711 }, { country: 'Netherlands', value: 665 }, { country: 'South Korea', value: 443 }, { country: 'Canada', value: 441 }];
    xAxis.data.setAll(data);
    series.data.setAll(data);
    series.appear(1000);
    chart.appear(1000, 100);
});
</script>

<div id='chartdiv'></div>



Eğer Pasta Grafiği oluşturman istenirse, şu kodu kullanarak oluştur:
<!-- Resources -->

<!-- Chart code -->
<script>
am5.ready(function() {
    var root = am5.Root.new('chartdiv');
    root.setThemes([am5themes_Animated.new(root)]);
    var chart = root.container.children.push(am5percent.PieChart.new(root, {layout: root.verticalLayout}));
    var series = chart.series.push(am5percent.PieSeries.new(root, {valueField: 'value', categoryField: 'category'}));
    series.data.setAll([{value: 10, category: 'One'}, {value: 9, category: 'Two'}, {value: 6, category: 'Three'}, {value: 5, category: 'Four'}, {value: 4, category: 'Five'}, {value: 3, category: 'Six'}, {value: 1, category: 'Seven'}]);
    series.appear(1000, 100);
});
</script>

<div id='chartdiv'></div>
Eğer Donut Grafiği oluşturman istenirse, şu kodu kullanarak oluştur:
<!-- Resources -->

<!-- Chart code -->
<script>
am5.ready(function() {
    var root = am5.Root.new('chartdiv');
    root.setThemes([am5themes_Animated.new(root)]);
    var chart = root.container.children.push(am5percent.PieChart.new(root, {layout: root.verticalLayout, innerRadius: am5.percent(50)}));
    var series = chart.series.push(am5percent.PieSeries.new(root, {valueField: 'value', categoryField: 'category', alignLabels: false}));
    series.labels.template.setAll({textType: 'circular', centerX: 0, centerY: 0});
    series.data.setAll([{value: 10, category: 'One'}, {value: 9, category: 'Two'}, {value: 6, category: 'Three'}, {value: 5, category: 'Four'}, {value: 4, category: 'Five'}, {value: 3, category: 'Six'}, {value: 1, category: 'Seven'}]);
    var legend = chart.children.push(am5.Legend.new(root, {centerX: am5.percent(50), x: am5.percent(50), marginTop: 15, marginBottom: 15}));
    legend.data.setAll(series.dataItems);
    series.appear(1000, 100);
});
</script>

<div id='chartdiv'></div>

Eğer Map Grafiği oluşturman istenirse, şu kodu kullanarak oluştur:
Ülke adı yazman gereken heryerde ülkeler aynı isimde olmalı data dizisinde farklı ISO formatında farklı ülke olamaz ikiside aynı ülkeleri içermeli.
Sana verilen ülke adlarını ISO Kodu formatına dönüştürerek aşağıdaki kodun '  var selectedCountries = ['US', 'CA', 'FR'];' kısmına yaz burda elle yazdığım ülkeleri sil sana verilen ülkeleri yaz ISO formatına dönüştürerek.

".'   

<!-- Resources -->
<!-- Chart code -->
<script>
am5.ready(function() {
  // Create root element
  var root = am5.Root.new("chartdiv");

  // Set themes
  root.setThemes([
    am5themes_Animated.new(root)
  ]);

  // Create map chart
  var chart = root.container.children.push(am5map.MapChart.new(root, {
    panX: "rotateX",
    panY: "translateY",
    projection: am5map.geoMercator()
  }));

  // Create main polygon series for countries
  var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_worldLow,
    exclude: ["AQ"]
  }));

  // Add custom data to the countries
  polygonSeries.data.setAll([
    { id: "US", name: "United States", value: 3025 },
    { id: "CA", name: "Canada", value: 1234 },
    { id: "FR", name: "France", value: 456 },
    // More countries and data...
  ]);

  polygonSeries.mapPolygons.template.setAll({
    tooltipText: "{name}: {value} adet",
    toggleKey: "active",
    interactive: true
  });

  polygonSeries.mapPolygons.template.states.create("hover", {
    fill: root.interfaceColors.get("primaryButtonHover")
  });

  polygonSeries.mapPolygons.template.states.create("active", {
    fill: root.interfaceColors.get("primaryButtonActive")
  });

  // Set specific countries to be active
  var selectedCountries = ["US", "CA", "FR"];

  polygonSeries.events.on("datavalidated", function() {
    polygonSeries.mapPolygons.each(function(polygon) {
      if (selectedCountries.includes(polygon.dataItem.dataContext.id)) {
        polygon.set("active", true);
      }
    });
  });

  // Set clicking on "water" to zoom out
  chart.chartContainer.get("background").events.on("click", function() {
    chart.goHome();
  });

  // Add zoom control
  var zoomControl = chart.set("zoomControl", am5map.ZoomControl.new(root, {}));
  zoomControl.homeButton.set("visible", true);

  chart.appear(1000, 100);
}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv" style="width: 100%; height: 500px;"></div>


'."
Tablolar ve veriler şunlardır:\n";

$post_table = $_POST["table"];
if ($post_table !== "all") {
    // Geçerli bir tablo adı olduğundan emin olun
    if (preg_match('/^[a-zA-Z0-9_]+$/', $post_table)) {
        // Belirtilen tablonun sütunlarını almak için sorgu
        $sql_columns = "SHOW COLUMNS FROM " . $post_table;
        $result_columns = $con->query($sql_columns);

        if ($result_columns) {
            if ($result_columns->num_rows > 0) {
                $prompt .= "Table: $post_table\nColumns:\n";
                while ($row_column = $result_columns->fetch_assoc()) {
                    $column_name = $row_column['Field'];
                    $prompt .= "- $column_name\n";
                }
                $prompt .= "\nData:\n";

                // Tablo verilerini almak için sorgu
                $sql_data = "SELECT * FROM " . $post_table;
                $result_data = $con->query($sql_data);

                if ($result_data) {
                    if ($result_data->num_rows > 0) {
                        while ($row_data = $result_data->fetch_assoc()) {
                            $prompt .= json_encode($row_data, JSON_UNESCAPED_UNICODE) . "\n";
                        }
                    } else {
                        $prompt .= "Table is empty.\n";
                    }
                } else {
                    $prompt .= "Error fetching data: " . $con->error . "\n";
                }
            } else {
                $prompt .= "No columns found in the table.\n";
            }
        } else {
            $prompt .= "Error fetching columns: " . $con->error . "\n";
        }
    } else {
        $prompt .= "Invalid table name.\n";
    }
} else {
    $sql = "SHOW TABLES";
    $result = $con->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_row()) {
                $table_name = $row[0];
                $prompt .= "Table: $table_name\n";

                // Tablo sütunlarını almak için sorgu
                $sql_columns = "SHOW COLUMNS FROM " . $table_name;
                $result_columns = $con->query($sql_columns);

                if ($result_columns) {
                    if ($result_columns->num_rows > 0) {
                        $prompt .= "Columns:\n";
                        while ($row_column = $result_columns->fetch_assoc()) {
                            $column_name = $row_column['Field'];
                            $prompt .= "- $column_name\n";
                        }
                        $prompt .= "\nData:\n";

                        // Tablo verilerini almak için sorgu
                        $sql_data = "SELECT * FROM " . $table_name;
                        $result_data = $con->query($sql_data);

                        if ($result_data) {
                            if ($result_data->num_rows > 0) {
                                while ($row_data = $result_data->fetch_assoc()) {
                                    $prompt .= json_encode($row_data, JSON_UNESCAPED_UNICODE) . "\n";
                                }
                            } else {
                                $prompt .= "Table is empty.\n";
                            }
                        } else {
                            $prompt .= "Error fetching data: " . $con->error . "\n";
                        }
                    } else {
                        $prompt .= "No columns found in the table.\n";
                    }
                } else {
                    $prompt .= "Error fetching columns: " . $con->error . "\n";
                }
            }
        } else {
            $prompt .= "No tables found.";
        }
    } else {
        $prompt .= "Error fetching tables: " . $con->error . "\n";
    }
}

}


    // JSON verisini oluşturma
    $data = [
        'contents' => [
            [
                'parts' => [
                    [
                        'text' => $prompt
                    ]
                ]
            ]
        ]
    ];

    $json_data = json_encode($data);

    // API URL'si
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-pro:generateContent?key=$YOUR_API_KEY";

    // API isteği gönderme
    $response = run_curl($url, $json_data);

    // Gelen yanıtı ayrıştırma ve hata kontrolü
    if ($response === false) {
        echo "API isteği başarısız.";
    } else {
        $response_data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "JSON ayrıştırma hatası: " . json_last_error_msg();
        } else {
            // Sadece "text" değerlerini alma
            if (isset($response_data['candidates'][0]['content']['parts'][0]['text'])) {
                $text = $response_data['candidates'][0]['content']['parts'][0]['text'];
                echo $text;
            } else {
                echo "Yanıt içerisinde metin bulunamadı.";
            }
        }
    }

    // Veritabanı bağlantısını kapat
    mysqli_close($con);
}

function run_curl($url, $json_data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
?>
