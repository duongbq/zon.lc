<link rel="stylesheet" href="/jquery-ui-1.7.1/themes/base/jquery-ui.css">
<script src="/jquery-ui-1.7.1/ui/jquery-ui.js"></script>

<div class="body" id="blog">

    <div id="sidebar">
        <!--Featured Blogs-->

        <div>
            <h5>Featured Blogs</h5>
            <ul class="posts">
                <li>
                    <span class="time">Apr 16</span>
                    <p>
                        <a href="blog.html">Tips On Arranging Furniture</a> This website template has been designed by Free Website Templates for you, for free.
                    </p>
                </li>
                <li>
                    <span class="time">Apr 15</span>
                    <p>
                        <a href="blog.html">How To Maintain Wooden Furniture</a> And we love the challenge of doing something diferent and something special.
                    </p>
                </li>
                <li>
                    <span class="time">Apr 16</span>
                    <p>
                        <a href="blog.html">The Newest Innovation On Wooden</a> You can replace all this text with your own text. What’s more, they’re absolutely free!
                    </p>
                </li>
            </ul>
        </div>

        <!--Featured Blogs-->

        <!--Blog Categories-->

        <div>
            <h5>Blog Categories</h5>
            <ul>
                <li>
                    <a href="blog.html">Carved Creations</a>
                </li>
                <li>
                    <a href="blog.html">Furniture</a>
                </li>
                <li>
                    <a href="blog.html">Maintenance and Cleaning</a>
                </li>
                <li>
                    <a href="blog.html">Innovations</a>
                </li>
                <li>
                    <a href="blog.html">Modern And New</a>
                </li>
                <li>
                    <a href="blog.html">Classic and Timeless</a>
                </li>
            </ul>
        </div>

        <!--Blog Categories-->

        <!--Archives-->

        <div>
            <h5>Archives</h5>
            <div id="datepicker"></div>
            <script>
                $(function() {
                    $("#datepicker").datepicker({
                        dateFormat: 'yy-mm-dd',
                        inline: true,
                        onSelect: function() {
                            var day = $("#datepicker").datepicker('getDate').getDate();
                            var month = $("#datepicker").datepicker('getDate').getMonth() + 1;
                            var year = $("#datepicker").datepicker('getDate').getFullYear();
                            var fullDate = year + "-" + month + "-" + day;

                            alert('code này do tao viết hôm nay: ' + fullDate);
                        }
                    });
                });
            </script>
            
        </div>

        <!--Archives-->
    </div>

    <div id="main">
        <?php foreach ($blogs as $blog): ?>
            <div class="viewer">
                <span class="time">
                    <?php echo date('M d', strtotime($blog['Blog']['publish_date'])); ?>
                </span>
                <h3>
                    <?php
                    echo $this->Html->link(
                            $blog['Blog']['title'], array('action' => 'view', $blog['Blog']['id'])
                    );
                    ?>
                </h3>
                <p class="info">
                    In <a href="blog.html">Production</a>, <a href="index.html">Carved Creations</a>
                </p>
                <div class="frame">
                    <img src="images/carving-master.jpg" alt="Img">
                </div>

                <p>
                    <?php echo $blog['Blog']['sumary']; ?>
                </p>

                <?php
                echo $this->Html->link(
                        'Read More', array('action' => 'view', $blog['Blog']['id']), array('class' => 'more')
                );
                ?>

            </div>
        <?php endforeach; ?>

        <!--pagination-->
        <div id="pagination">
            <?php
            echo $this->Paginator->prev(
                    '« Previous', null, null, array('class' => 'prev')
            );
            ?>
            <ul>
                <?php
                echo $this->Paginator->numbers(array('currentClass' => 'selected', 'tag' => 'li', 'separator' => ''));
                ?>
            </ul>
            <?php
            echo $this->Paginator->next(
                    'Next »', null, null, array('class' => 'next')
            );
            ?>
        </div>
        <!--pagination-->

    </div>
</div>
