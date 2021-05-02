<!DOCTYPE html>


<html lang="en">

    <head>
        <title>As seen in browser tab</title>
        <link href=style.css rel="stylesheet" type = "text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
    </head>

    <body>
        <div id=container>
            <div id=header>
                <h1></h1>
            </div>
            
            <div id=content> 
                <div id=nav>
                    <h3>Navigation</h3>
                    <ul>
                        <li><a class="selected" href="">Main</a></li>
                        <li><a href="">Second</a></li>
                        <li><a href="">Third</a></li>

                    </ul>
                </div>


                <div id=main>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque porta orci, pellentesque sollicitudin est iaculis ut. Morbi sodales purus eget mauris aliquam egestas. Donec nec neque et sem ultrices ullamcorper et gravida lacus. Pellentesque dui libero, imperdiet nec viverra et, aliquet tincidunt tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris interdum mi et massa porttitor, id ullamcorper justo ultrices. Vivamus convallis vulputate malesuada. Nulla non odio rutrum, luctus mi dignissim, hendrerit dui. Maecenas bibendum semper ex, nec rhoncus nisi interdum ut.                        Vivamus pretium, nunc vitae accumsan maximus, justo orci venenatis nisl, a pretium ex lectus quis velit. Proin ut nunc eget felis auctor fermentum. In laoreet felis nec purus tristique, at hendrerit eros dignissim. Donec scelerisque erat sed viverra euismod. Nulla eget malesuada elit. Etiam erat tortor, vestibulum id felis eget, finibus tincidunt sapien. Cras massa purus, tincidunt ac quam sed, consequat commodo elit. Phasellus quis est elit. Vivamus molestie mi tellus, eget convallis felis gravida a. Ut nec velit ipsum. Quisque dapibus, quam sed finibus pulvinar, erat risus ultricies mauris, nec sagittis augue tellus nec massa. Nunc vitae ex est. </p>
                    <p>Vestibulum mi purus, iaculis vitae erat feugiat, mattis ornare massa. Aliquam sit amet magna arcu. Duis ac laoreet ante, eget ornare lorem. Pellentesque luctus ultrices nisl, id cursus est. Mauris venenatis elit eget tristique fermentum. Cras commodo metus non purus cursus, nec viverra nisi rutrum. Maecenas malesuada, libero rutrum semper mattis, felis risus fermentum mi, rutrum condimentum lacus arcu sed velit. Ut tincidunt commodo tortor, feugiat feugiat odio feugiat vel. Phasellus tellus est, interdum ac lacus ac, iaculis volutpat tortor. Nullam ullamcorper, leo eu tempor imperdiet, augue nisi dictum nunc, ac iaculis justo metus vitae leo. Fusce lobortis sollicitudin tortor, eu pulvinar ex efficitur eget. </p>
                    
                    <form method="post" action="/action_page.php">
                        <label for="mcode">Meteringpointcode</label>
                        <br>
                        <input type="text" id=mcode name=mcode>
                        <br><br>
                        <label for="sdate">Startdate</label>
                        <br>
                        <input type="date" id=sdate name=sdate>
                        <br><br>
                        <label for="edate">Enddate</label>
                        <br>
                        <input type="date" id=edate name=edate>
                        <br><br>
                        <input type="submit" value="Submit">
                        
                    </form>
                </div>

            </div>

            <div id=footer>
                Copyright &copy; Dz
            </div>

        </div>

    </body>
</html>
