<form action="/" method="get" class="form-search">

    <input type="hidden" name="post_type[]" value="post" />

    <input type="text" name="s" id="search" required value="<?php the_search_query(); ?>" />

    <button type="submit" class="btn-search">

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22" height="22" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

            <path d="M460.355,421.59L353.844,315.078c20.041-27.553,31.885-61.437,31.885-98.037

                C385.729,124.934,310.793,50,218.686,50C126.58,50,51.645,124.934,51.645,217.041c0,92.106,74.936,167.041,167.041,167.041

                c34.912,0,67.352-10.773,94.184-29.158L419.945,462L460.355,421.59z M100.631,217.041c0-65.096,52.959-118.056,118.055-118.056

                c65.098,0,118.057,52.959,118.057,118.056c0,65.096-52.959,118.056-118.057,118.056C153.59,335.097,100.631,282.137,100.631,217.041

                z"></path>

        </svg>

    </button>

</form>
