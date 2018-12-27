<!DOCTYPE html>
<html>
<head>
<title>{{ $profile->nama_profile }} - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="{{ url('/2-cv/2-default/style.css') }}">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

</head>
<body id="top">
<div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <?php if($profile->foto == "default.png"): ?>
                <img src="{{ url('/images/default.png') }}" alt="{{ $profile->nama_profile }}" />
            <?php else: ?>
                <img src="{{ Storage::url($profile->foto) }}" alt="{{ $profile->nama_profile }}" />
            <?php endif; ?>
        </div>
        
        <div id="name">
            <h1 class="quickFade delayTwo">Curriculum Vitae</h1>
            <h2 class="quickFade delayThree">{{ $profile->nama_profile }}</h2>
        </div>
        
        <div id="contactDetails" class="quickFade delayFour">
        <table>
            <tr>
                <td>E-mail</td><td>:</td><td><a href="mailto:{{ $user->email }}" target="_blank">{{ $user->email }}</a></td>
            </tr>
            <!--<tr>
                <td>Facebook</td><td>:</td><td> <a href="http://www.facebook.com/afif.sungkawa"> www.facebook.com/afif.sungkawa</a></td>
            </tr>-->
            <tr>
                <td>Mobile</td><td>:</td><td> {{ $profile->tlp_profile }}</td>
            </tr>
        </table>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
        <!--<section>
            <article>
                <div class="sectionTitle">
                    <h1>Tujuan Karir</h1>
                </div>
                
                <div class="sectionContent">
                    <p>Sebagai seorang Lulusan di bidang Teknik Computer,Saya berkeinginan untuk mengembangkan dan menambah kemampuan di berbagai bidang lain,
                    Salah satunya adalah di bidang Perbankan.
                    Saya berambisi untuk terus mencari pengalaman sebanyak mungkin untuk menambah kualitas diri saya. 
                    saya yakin bisa ikut meningkatkan Kineja Perusahaan serta dapat Di andalkan.
                    </p>
                </div>
            </article>
            <div class="clear"></div>
        </section>-->
        
        
        <section>
            <div class="sectionTitle">
                <h1>Data Pribadi</h1>
            </div>
            
            <div class="sectionContent">
                <table>
                <tr>
                    <td>Nama</td><td>: {{ $profile->nama_profile }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td><td>: {{ $profile->tempat_lhr_profile }}, {{ $profile->tgl_lhr_profile }}</td>
                </tr>
                <tr>
                    <td>Warga Negara</td><td>: Indonesia</td>
                </tr>
                <tr>
                    <td>Alamat</td><td>: {{ $profile->alamat }}-</td>
                </tr>
                <tr>
                    <td>E-mail</td><td>: {{ $user->email }}</td>
                </tr>
                </table>
                
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Keahlian</h1>
            </div>
            
            <div class="sectionContent">
                <table width=500px>
                <?php foreach($skills as $data): ?>
                    <tr>
                        <td>{{ $data->skill }}</td>
                    </tr>
                <?php endforeach; ?>
                </table><br>
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Riwayat Pendidikan</h1>
            </div>
            
            <div class="sectionContent">
                <?php foreach($education as $data): ?>
                    <article>
                        <h2>{{ $data->education }}</h2><br>
                        <h4>{{ $data->from_education }}</h4>
                    </article>
                    <br>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </section><br><br>
        <section>
            <div>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;Demikian Curriculum Vitae ini saya buat dengan Sebenar benarnya,Untuk dapat dipergunakan sebagai mana mestinya.</p>
            <br><br><br><br><br><br>
            <p align="right">Hormat Saya,<br><br><br>{{ $profile->nama_profile }}</p>
        </section>
        
    </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>