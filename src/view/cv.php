<?php
@session_start();
var_dump($_SESSION); ?>
<form id="cv_model" action="index.php?page=cvController" method="post">
    <fieldset class="form-group">
        <legend>Je choisis mon modèle : </legend>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cvKind" id="optionsRadios1" value="1">
                CV 1
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cvKind" id="optionsRadios2" value="2">
                CV 2
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cvKind" id="optionsRadios3" value="3">
                CV 3
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cvKind" id="optionsRadios4" value="4">
                CV 4
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cvKind" id="optionsRadios5" value="5">
                CV 5
            </label>
        </div>
        <button class="btn-info col-md-12" form="cv_model" type="submit"  value="Submit">Choisir mon modèle de CV</button>
    </fieldset>
</form>


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 800px; height: 100px; margin: 0 auto">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img src="src/content/model1.png" alt="Model 1">
        </div>

        <div class="item">
            <img src="src/content/model2.png" alt="Model 2">
        </div>

        <div class="item">
            <img src="src/content/model3.png" alt="Model 3">
        </div>

        <div class="item">
            <img src="src/content/model4.png" alt="Model 4">
        </div>

        <div class="item">
            <img src="src/content/model5.png" alt="Model 5">
        </div>

    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>