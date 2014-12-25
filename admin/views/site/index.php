
<style>

    /* reset */
    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
    article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
    ol,ul{list-style:none;margin:0;padding:0;}
    blockquote,q{quotes:none;}
    blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
    table{border-collapse:collapse;border-spacing:0;}
    /* start editing from here */
    a{text-decoration:none;}
    .txt-rt{text-align:right;}/* text align right */
    .txt-lt{text-align:left;}/* text align left */
    .txt-center{text-align:center;}/* text align center */
    .float-rt{float:right;}/* float right */
    .float-lt{float:left;}/* float left */
    .clear{clear:both;}/* clear float */
    .pos-relative{position:relative;}/* Position Relative */
    .pos-absolute{position:absolute;}/* Position Absolute */
    .vertical-base{	vertical-align:baseline;}/* vertical align baseline */
    .vertical-top{	vertical-align:top;}/* vertical align top */
    .underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
    nav.vertical ul li{	display:block;}/* vertical menu */
    nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
    img{max-width:100%;}
    /*end reset*/
    /*-----light-font----*/
    @font-face {
        font-family: 'open_sanslight';
        src: url('../fonts/opensans_light_macroman/OpenSans-Light-webfont.eot');
        src: url('../fonts/opensans_light_macroman/OpenSans-Light-webfont.eot?#iefix') format('embedded-opentype'),
            url('../fonts/opensans_light_macroman/OpenSans-Light-webfont.woff') format('woff'),
            url('../fonts/opensans_light_macroman/OpenSans-Light-webfont.ttf') format('truetype'),
            url('../fonts/opensans_light_macroman/OpenSans-Light-webfont.svg#open_sanslight') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    /*-----regular-font----*/
    /*-----regular-font----*/
    @font-face {
        font-family: 'open_sansregular';
        src: url('../fonts/opensans_regular_macroman/OpenSans-Regular-webfont.eot');
        src: url('../fonts/opensans_regular_macroman/OpenSans-Regular-webfont.eot?#iefix') format('embedded-opentype'),
            url('../fonts/opensans_regular_macroman/OpenSans-Regular-webfont.woff') format('woff'),
            url('../fonts/opensans_regular_macroman/OpenSans-Regular-webfont.ttf') format('truetype'),
            url('../fonts/opensans_regular_macroman/OpenSans-Regular-webfont.svg#open_sansregular') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    #content {
        /**background:url(../images/bg.jpg) no-repeat 100%;**/
        background-size: 100%;
        font-family: 'open_sanslight';
        font-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

        background: rgb(254,252,234); /* Old browsers */
        background: -moz-linear-gradient(left, rgba(254,252,234,1) 0%, rgba(241,218,54,1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(254,252,234,1)), color-stop(100%,rgba(241,218,54,1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(left, rgba(254,252,234,1) 0%,rgba(241,218,54,1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(left, rgba(254,252,234,1) 0%,rgba(241,218,54,1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(left, rgba(254,252,234,1) 0%,rgba(241,218,54,1) 100%); /* IE10+ */
        background: linear-gradient(to right, rgba(254,252,234,1) 0%,rgba(241,218,54,1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefcea', endColorstr='#f1da36',GradientType=1 ); /* IE6-9 */
        /**-----start-wrap---------**/
    }
    .wrap
    {
        width:70%;
        margin:5.2% auto 4% auto;
    }
    /**-----start-logo--------**/
    .logo
    {
        padding: 1em;
        text-align: center;
        padding: 1% 1% 5% 1%;
    }
    .logo h1{
        display: block;
        font-size:4em;
        padding: 2em 0em;
    }
    .logo span{
        font-size: 2em;
        /**color:#fff;**/
    }
    .logo span img{
        width:40px;
        height: 40px;
        vertical-align:bottom;
        margin: 0px 10px;
    }
    /**-----end-logo---------**/
    /**-----start-search-bar-section------**/
    /*****copy-right*****/
    /*********Media Queries************/
    @media only screen and (max-width: 768px)
    {
        .wrap {
            width: 80%;
        }
        .logo img {
            width: 315px;
        }
    }
    @media only screen and (max-width: 640px)
    {
        .wrap {
            width: 85%;
        }
        .logo {
            padding: 1% 1% 12% 1%;
        }

        .logo img {
            width: 300px;
        }
    }
    @media only screen and (max-width: 480px)
    {
        .wrap {
            width: 90%;
        }
        .logo {
            padding: 1% 1% 12% 1%;
        }

        /***/
        .logo span {
            font-size: 1.6em;
        }


        .logo img {
            width: 270px;
        }
    }
    @media only screen and (max-width: 320px)
    {
        .wrap {
            width: 90%;
        }
        .logo {
            padding: 1% 1% 12% 1%;
        }

        /***/
        .logo span {
            font-size: 1.4em;
        }

        .logo span img {
            vertical-align: middle;
        }
        .logo img {
            width: 200px;
        }

    }

</style>

<!-----start-wrap--------->
<div class="wrap">
    <!-----start-content--------->
    <div class="content">
        <!-----start-logo--------->
        <div class="logo">
            <h1>Movie Stop</h1>
            <?php if (Yii::app()->user->isGuest){ ?>
                <span>Please Login to Access the Dashboard</span>
            <?php }else{ ?>
                <span>Please Use Top Navigation Bar for Dashboard Action</span>
            <?php } ?>

        </div>
        <!-----end-logo--------->
        <!-----start-search-bar-section--------->
        <!-----end-sear-bar--------->
    </div>


    <!---------end-wrap---------->
</body>
</html>
