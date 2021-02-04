/*** Reset ***/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: <?=$backImg?>;
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    font-size: 24px;
}

main {
  
  background-color: <?=$backColor?>;
  display: flex;
  flex-direction: column;
  padding: 50px;
}

input {
    display: block;
    margin: 20px 0 20px 0;
    border-radius: 5px;
    padding: 5px;
    border: none;
    font-size: 18px;
}

header {
    padding-right: 50px;
}

h1 {
    font-size: 28px;
    font-family: <?=$headingFont?>;
}

a {
    color: <?=$linkColor?>
}

a:hover {
    color: #31a6d4;
}



