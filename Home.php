<?php
require("checkvalid.php");
require("header.php");
 ?>

<html>
<title> WJ FORSETI</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>


<!-- Grid -->
  <div class="w3-row w3-padding w3-border">

<!-- BIO -->
    <div class="w3-col l8 s12">

<!-- BIO -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h1>SUPERHERO 101</h1>
          <h5><span class="w3-opacity">THE SUPERHERO... THE LEGEND...</span>YOU</h5>
        </div>

        <div class="w3-justify">
          <img src="superhero.jpg" alt="" style="width:100%" class="w3-padding-16">
          <p><strong>SUPERHEROES 101 : </strong>"I believe there’s a hero in all of us, that keeps us honest, gives us strength, makes us noble, and finally allows us to die with pride.
           Even though sometimes we have to be steady, and give up the thing we want most. Even our dreams.”</p>

          <p>Superman, Batman, Spider-Man, the Hulk, and countless other comic book superheroes have been in the media for decades. Since their debut in 1938,
            superheroes have dealt with deep personal, social, and political issues. From drug and alcohol abuse to the horrific events during September 11, 2001,
            they have brought us a feeling of hope, creativity, and wonder. (Comic Book Superheroes Unmasked) As the time changes, our heroes manage to stay with it,
            overcoming the many challenges along the way. The story of the American superhero has been a long, uphill struggle, yet they always seem to be relevant with the ever-changing times.
            They still remain a constant impact on the people and the nation.</p>

            <p>The 1930’s was a tragic decade. America had entered the Great Depression, which was filled with poverty and the lack of hope. People did many things to try to escape this terrible reality by either
             watching movies, attending sporting events, and listening to the radio. At this time, the newspaper was also very valuable. They had all the latest news, interviews, games, and even comic strips.
            Comic strips are a sequence of drawings, relating comic incidents that typically have dialogue printed in balloons. The first comic strips had stories about cute animals or funny cartoon characters
             and were largely accepted as a form of entertainment for children. Old comic strips were collected in magazines called comic books. National Allied Publications was one of the first comic book publishers in the industry.
             Founded in 1934, one of their most popular titles was Detective Comics.</P>

             <p> Jerry Siegel and Joe Shuster were two young Jewish immigrants who lived in New York City. They were fascinated with science fiction, mythology, and art. They were very passionate about comic books and read them on a daily basis.
               Tired of dreaming of creating their own character, they finally did so in 1933. (Comic Book Superheroes Unmasked) Siegel was the writer and Shuster provided the illustrations. Their character was a hero, who, when he was an infant,
                was sent in a space ship from the doomed planet Krypton, which crashed down to Earth. The infant was found by a kindly couple from Kansas, and was raised to believe in truth and justice. Being from another planet, he had many unique abilities
                including super speed, strength, and invulnerability. He donned a blue outfit with a shield on his chest marked with an “S” and a bright red cape. They called him “Superman.</P>

           <p>Superman was turned down by every newspaper in the area; the very idea that a man who can lift cars and was “faster than a speeding bullet” was utterly ridiculous. After five long years of rejection, DC Comics (formerly National Allied Publications) took Siegel
         and Shuster’s creation and put him on the cover of the comic book, Action Comics #1. It sold out every copy. From that day forward, Superman has become a national icon and kicked off what historians would later refer to as “The Golden Age of Comic Books.” (Comic Book Superheroes Unmasked)</P>

      <p>Superman was everywhere. By 1940 he had radio shows, cartoons, dolls, action figures, and even a balloon in the Macy’s Thanksgiving Day Parade. What made Superman unique and relatable was that he was a fictional character who lived in the same world as his readers. He was an immigrant who came
       to this new world and strived for the American dream. He was especially looked up to by young boys and teenagers. With Superman’s huge success, DC wanted a new hero to follow him. So followed Batman and many many others... <strong> https://comicvine.gamespot.com/profile </strong> </p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3"></div>
          </div>
        </div>
      </div>
      <hr>

  <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
        </div>
        <div class="w3-justify">
          <p class="w3-clear"></p>

<!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <div class="w3-col l2 m3">
                <img src="superhero.jpg" style="width:90px;">
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
              </div>
            </div>
          </div>
        </div>
      </div>

<!--PROFILE -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center"></div>
        <div class="w3-justify">
        </div>
      </div>
    </div>

<!-- About/Information menu -->
    <div class="w3-col l4">
<!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="sv.jpg" alt="" style="width:100%" class="w3-color">
        <div class="w3-container w3-black">
          <h4>WREN JAYMES</h4>
            <p id="bio">In a world that feels like crap sometimes one just wants to rip off their shirt and become the superhero
            they are convinced they are. I am not this person. I just did this for an assignment.</p>

<script>

function para()
{
    document.getElementById("bio").innerHTML = "PHP SUCKS. I AM NEVER DOING MORE PHP!!";
}
</script>

<button type="button" background="black" onclick="para()">Try it</button>
        </div>
      </div>
      <hr>
<!-- END About/Intro Menu -->
    </div>

<!-- END GRID -->
  </div>

<!--END MENU -->
</div>

<!-- Footer -->
<?php
require("footer.php");
?>
</body>
</html>
