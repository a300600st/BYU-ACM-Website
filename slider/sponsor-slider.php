<div id="SponsorSlider">

    <a href="http://www.Google.com">
        <img src="img/sponsors/1.jpg" title="Desc" />
    </a>
    
    
</div>
<div class="SliderNameNavigation"></div>


<script type="text/javascript">

    // we created new effect and called it 'demo01'. We use this name later.
    Sliderman.effect({name: 'move', fade: true, duration: 1000});

    var demoSlider = Sliderman.slider({container: 'SponsorSlider', width: 600, height: 150, effects: 'move',
    display: {
        pause: true, // slider pauses on mouseover
        autoplay: 2000, // 3 seconds slideshow
        /*always_show_loading: 200, // testing loading mode*/
        description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
        loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
        buttons: {opacity: 1, prev: {className: 'SliderNamePrev2', label: ''}, next: {className: 'SliderNameNext2', label: ''}}, // Next/Prev buttons settings
        /*navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings*/
    }});

</script>