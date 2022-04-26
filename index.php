<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div id="root">
        <div class="app-container">
            <div class="mt-3 mb-4 d-flex align-items-center justify-content-around">
                <div class="d-flex"><button class="header-button rounded d-flex align-items-center justify-content-center py-2 me-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 4.075a.423.423 0 0 0 .43.44H4.9c.247 0 .442-.2.475-.445.159-1.17.962-2.022 2.393-2.022 1.222 0 2.342.611 2.342 2.082 0 1.132-.668 1.652-1.72 2.444-1.2.872-2.15 1.89-2.082 3.542l.005.386c.003.244.202.44.446.44h1.445c.247 0 .446-.2.446-.446v-.188c0-1.278.487-1.652 1.8-2.647 1.086-.826 2.217-1.743 2.217-3.667C12.667 1.301 10.393 0 7.903 0 5.645 0 3.17 1.053 3.001 4.075zm2.776 10.273c0 .95.758 1.652 1.8 1.652 1.085 0 1.832-.702 1.832-1.652 0-.985-.747-1.675-1.833-1.675-1.04 0-1.799.69-1.799 1.675z"></path>
                        </svg></button><button class="header-button rounded d-flex align-items-center justify-content-center py-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></button></div>
                <h1 class="text-center mb-0 app-name"><span class="">C</span><span class="letter-red">I</span><span class="letter-green">N</span><span class="">C</span><span class="">O</span></h1>
                <div class="d-flex"><button class="header-button rounded d-flex align-items-center justify-content-center py-2 me-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"></path>
                        </svg></button><button class="header-button rounded d-flex align-items-center justify-content-center py-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                        </svg></button></div>
            </div>
            <div class="mt-3" style="cursor: default;">
                <div class="mb-4">
                    <div>
                        <div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center typing me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center typing me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center typing me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center typing me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center typing"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled"></div>
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled me-2"></div>
                                <div class="letter-wrapper rounded d-flex justify-content-center align-items-center disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-lg-5 px-2">
                    <div class="mb-3 d-flex justify-content-center"><button class="keyboard-button rounded me-3 action-button" disabled=""><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"></path>
                            </svg></button><button class="keyboard-button rounded action-button" disabled=""><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"></path>
                            </svg></button></div>
                    <div class="d-flex justify-content-center mb-2"><button class="keyboard-button rounded me-2 letter-button"><span>Q</span></button><button class="keyboard-button rounded me-2 letter-button"><span>W</span></button><button class="keyboard-button rounded me-2 letter-button"><span>E</span></button><button class="keyboard-button rounded me-2 letter-button"><span>R</span></button><button class="keyboard-button rounded me-2 letter-button"><span>T</span></button><button class="keyboard-button rounded me-2 letter-button"><span>Y</span></button><button class="keyboard-button rounded me-2 letter-button"><span>U</span></button><button class="keyboard-button rounded me-2 letter-button"><span>I</span></button><button class="keyboard-button rounded me-2 letter-button"><span>O</span></button><button class="keyboard-button rounded letter-button"><span>P</span></button></div>
                    <div class="d-flex justify-content-center mb-2"><button class="keyboard-button rounded me-2 letter-button"><span>A</span></button><button class="keyboard-button rounded me-2 letter-button"><span>S</span></button><button class="keyboard-button rounded me-2 letter-button"><span>D</span></button><button class="keyboard-button rounded me-2 letter-button"><span>F</span></button><button class="keyboard-button rounded me-2 letter-button"><span>G</span></button><button class="keyboard-button rounded me-2 letter-button"><span>H</span></button><button class="keyboard-button rounded me-2 letter-button"><span>J</span></button><button class="keyboard-button rounded me-2 letter-button"><span>K</span></button><button class="keyboard-button rounded letter-button"><span>L</span></button></div>
                    <div class="d-flex justify-content-center mb-2"><button class="keyboard-button rounded me-2 letter-button"><span>Z</span></button><button class="keyboard-button rounded me-2 letter-button"><span>X</span></button><button class="keyboard-button rounded me-2 letter-button"><span>C</span></button><button class="keyboard-button rounded me-2 letter-button"><span>V</span></button><button class="keyboard-button rounded me-2 letter-button"><span>B</span></button><button class="keyboard-button rounded me-2 letter-button"><span>N</span></button><button class="keyboard-button rounded letter-button"><span>M</span></button></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="game.js"></script>

</html>