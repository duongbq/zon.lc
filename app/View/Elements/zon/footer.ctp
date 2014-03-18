<div>
    <div id="links">

        <div class="showroom">
            <h4>Zon Studio</h4>
            <a href="/contact">
                <img src="/images/logo.png" alt="Zon Studio" title="Zon Studio">
            </a>
            <p>
                Địa chỉ: Số 6 ngõ 54 An Dương, Hà Nội <br/> 
                Phone: 0904.530.520 <br/>
                <a href="mailto:zonstudio368@gmail.com">zonstudio368@gmail.com</a>
            </p>
        </div>

        <div>
            <h4>Recent Blog Posts</h4>
            <ul class="posts">
                <li>
                    <span class="time">Apr 16</span>
                    <p>
                        <a href="blog.html">The Carving Master &amp; Owner</a> Maybe you’re looking for something diferent, something special.
                    </p>
                </li>
                <li>
                    <span class="time">Apr 15</span>
                    <p>
                        <a href="blog.html">5 Star Hotels We Supply</a> And we love the challenge of doing something diferent and something special.
                    </p>
                </li>
                <li>
                    <span class="time">Apr 14</span>
                    <p>
                        <a href="blog.html">How To Pick The Right Furniture For You</a> What’s more, they’re absolutely free! You can do a lot with them.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <form action="#" method="post" id="newsletter">
                <h4>Join Our Newsletter</h4>
                <input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if (this.value == '') {
                            this.value = this.defaultValue;
                        }" onFocus="javascript:if (this.value == this.defaultValue) {
                                    this.value = '';
                                }">
                <input type="submit" value="Sign up" class="btn2" />
            </form>
            <div id="connect">
                <h4>Social Media</h4>
                <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
            </div>
        </div>

    </div>

    <ul class="navigation">
        <li>
            <?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Wedding', '/wedding'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Portraits', '/portraits'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Models', '/models'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Blogs', '/blogs'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Contact', '/contact'); ?>
        </li>
    </ul>


    <p id="footnote">
        © Copyright <?php echo date('Y'); ?>. All Rights Reserved.
    </p>
</div>