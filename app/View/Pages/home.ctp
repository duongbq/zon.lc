<?php
echo $this->Html->css('/nivo-slider/themes/dark/dark');
echo $this->Html->css('/nivo-slider/nivo-slider');

echo $this->Html->script('/nivo-slider/jquery.nivo.slider.pack');
echo $this->Html->script('/nivo-slider/jquery.nivo.slider');
?>
<div class="body">

    <div id="adbox" class="slider-wrapper theme-dark">
        <div id="slider" class="nivoSlider">
            <?php
            $dir = new Folder(WWW_ROOT . 'img');
            $files = $dir->find('.*\.(jpg|png)');
            ?>
            <?php foreach ($files as $file) : ?>
                <img src="<?php echo '/img/' . $file; ?>" data-thumb="<?php echo '/img/' . $file; ?>"/>
            <?php endforeach; ?>
        </div>

    </div>

    <ul id="featured">
        <li>
            <div>
                <img src="images/living-room.jpg" alt="Img"> <a href="index.html"></a>
            </div>
            <div class="details">
                <h4>Living Room</h4>
                <p>
                    This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.
                </p>
            </div>
        </li>
        <li>
            <div>
                <img src="images/bedroom.jpg" alt="Img"> <a href="index.html"></a>
            </div>
            <div class="details">
                <h4>Bedroom</h4>
                <p>
                    You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
                </p>
            </div>
        </li>
        <li>
            <div>
                <img src="images/kitchen.jpg" alt="Img"> <a href="index.html"></a>
            </div>
            <div class="details">
                <h4>Kitchen</h4>
                <p>
                    If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
                </p>
            </div>
        </li>
    </ul>
    <div class="contact">
        <p>
            For Order and Inquiries Please Call: <b>0904.530.520</b> Or you can visit us at: <b>No.6 54 An Dương Street, Hà Nội</b>
        </p>
    </div>
    <div class="blog">
        <h4>From the Blog</h4>
        <div>
            <img src="images/carving-small.png" alt="Img"> <span>April 16, 2023</span>
            <p>
                CC's Carving
            </p>
            <a href="blog.html" class="more">Read More</a>
        </div>
        <div>
            <img src="images/resort-small.png" alt="Img"> <span>April 15, 2023</span>
            <p>
                5 Star Resorts
            </p>
            <a href="blog.html" class="more">Read More</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>