</div> <!-- /.container -->

<footer class="blog-footer">
    <div class="col-sm-3">
        <h4>contact</h4>
        <ul class="list-wrap">
            <li class="list-unstyled"> Bentheimerstraat 345</li>
            <li class="list-unstyled">Coevorden</li>
            <li class="list-unstyled">2344DF</li>
            <li class="list-unstyled"></li>
        </ul>
    </div>

    <div class="col-sm-3">
        <h4>social media</h4>
        <ul>
            <li  class="list-unstyled" >Facebook</li>
            <li  class="list-unstyled">Twitter</li>
            <li  class="list-unstyled">Instagram</li>
        </ul>
    </div>

    <div class="col-sm-3 footer-widget-2">
        <h4>Catergory</h4>
            <?php $variable = wp_list_categories( array(
            'echo' => true,
            'show_count' => false,
            'class' =>'list-unstyled'
            ) );

            $variable = preg_replace( '~\((\d+)\)(?=\s*+<)~', '$1', $variable );
            echo $variable;


            ?>

        </ul>
    </div>


    <div class="col-sm-3">
        <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
         <a href="#">Back to top</a>
        </p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>