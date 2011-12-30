<div id="SliderName">

    <a href="#1">
        <img src="slider/img/img1.jpg" title="Desc" />
    </a>
    
    <img src="slider/img/img2.jpg" />
        
    <img src="slider/img/img3.jpg" />
</div>
<div class="SliderNameNavigation"></div>

<script type="text/javascript">

    // we created new effect and called it 'demo01'. We use this name later.
    Sliderman.effect({name: 'blinds', fade: true, duration: 1000});

    var demoSlider = Sliderman.slider({container: 'SliderName', width: 960, height: 460, effects: 'blinds',
    display: {
        pause: true, // slider pauses on mouseover
        autoplay: 3000, // 3 seconds slideshow
        /*always_show_loading: 200, // testing loading mode*/
        description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
        loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
        buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
        /*navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings*/
    }});

</script>
