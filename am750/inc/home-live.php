<hr class="is-hidden-mobile">

<?php $live_blog_posting_tema =  get_option('live_blog_posting_tema'); ?>

<div class="pt-0-mobile" itemid="https://750.am/category/en-vivo" itemscope itemtype="https://schema.org/LiveBlogPosting">

      <div itemprop="about" itemscope itemtype="https://schema.org/Event">
        <!-- <span itemprop="startDate" content="2015-03-09T13:00:00-07:00">March 9, 2015 1:17 PM</span> -->
        <meta itemprop="name" content="<?php echo $live_blog_posting_tema; ?>" />
      </div>
      <meta itemprop="coverageStartTime" content="2021-11-08T10:17:28-07:00" />
      <meta itemprop="coverageEndTime" content=" " />
      <h1 itemprop="headline" class="is-size-8" style="color:#ea0017; font-weight: bold"> EN VIVO: <?php echo $live_blog_posting_tema;?>  </h1>
      <!-- <p itemprop="description" class="is-size-7">Todo lo que necesitas saber</p> -->
    
    <?php
        $jsonurl = "https://750.am/wp-json/wp/v2/posts?categories=128625&per_page=3"; /*destacados*/
        $json = file_get_contents($jsonurl);
        $json = json_decode($json, true); //convert json to array

        //micro data -- > https://schema.org/LiveBlogPosting
        foreach( $json as $item ) {
            $date =  $item['date']; 
            $titles = $item['title']['rendered'];
            $titlesc = str_replace("\"","''", $titles);
            $link =  $item['link']; 
    ?>

    <div itemprop="liveBlogUpdate" itemscope itemtype="https://schema.org/BlogPosting">
        <p><span itemprop="datePublished" content="<?php echo $date; ?>" class="is-size-7"> 
            <a href="<?php  echo $link; ?>">
            <?php $date = substr($date,11); $date  = substr_replace($date ,"", -3); echo $date; ?> </span></p>
            <h2 itemprop="headline" class="is-size-7"> <?php  echo $titlesc; ?></h2>
        </a>
    </div>  
    
    <?php
    }
    ?>

</div>
<hr>

<?php
echo '
<script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"LiveBlogPosting",
      "@id":"https://750.am/category/en-vivo/",
      
      "about":{
        "@type":"Event",
        "startDate":"//fecha de la última incidencia publicada con formato ISO del país",
        "endDate": "//fecha de la última incidencia publicada con formato ISO del país",
        "name":"'.$live_blog_posting_tema.'"
      },
      
    "publisher": {
        "@type": "Organization",
        "id": "#organization",
        "name": "AM750",
        "url": "https://750.am/",
        "logo": {
            "@type": "ImageObject",
            "@id": "#logoImage",
            "url": "https://750.am/pwa-152x152.png",
            "height": 152,
            "width": 152
        },
        "sameAs": ["https://www.facebook.com/AM750, https://www.instagram.com/radioam750, https://twitter.com/AM750"]
    },
';

echo '  
  "coverageStartTime":"2021-11-08T10:17:28-07:00",
  "coverageEndTime":"",
  "headline":"'.$live_blog_posting_tema.' Live",
  "description":"Toda la cobertura",
';


echo ' "liveBlogUpdate":[ ';

$jsonurl = "https://750.am/wp-json/wp/v2/posts?categories=128625&per_page=3"; /*destacados*/
$json = file_get_contents($jsonurl);
$json = json_decode($json, true);
$count = 0;

foreach( $json as $item ) {
    $count++;
    $date =  $item['date']; 
    $titles = $item['title']['rendered'];
    $titlesc = str_replace("\"","''", $titles);
    //echo $count.'<br>';
    echo '
        {
          "@type":"BlogPosting",
          "headline":"'.$titlesc.'",
          "datePublished":"'.$date.'"
        }';

    if($count!=3) { echo ',';} 
}

 echo '
   ]
  
 }
 </script>
';
?>