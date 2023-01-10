<div id="loder-container">
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="12" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                    result="goo" />
                <feBlend in="SourceGraphic" in2="goo" />
            </filter>
        </defs>
    </svg>
</div>

<style>
    body {
    }

    .dots {
        width: 0;
        height: 0;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        filter: url(#goo);
    }

    .dot {
        width: 0;
        height: 0;
        position: absolute;
        left: 0;
        top: 0;
    }

    .dot:before {
        content: '';
        width: 35px;
        height: 35px;
        border-radius: 50px;
        background: #fbd301;
        position: absolute;
        left: 50%;
        transform: translateY(0) rotate(0deg);
        margin-left: -17.5px;
        margin-top: -17.5px;
    }

    @keyframes dot-move {
        0% {
            transform: translateY(0);
        }

        18%,
        22% {
            transform: translateY(-70px);
        }

        40%,
        100% {
            transform: translateY(0);
        }
    }

    @keyframes dot-colors {
        0% {
            background-color: #fbd301;
        }

        25% {
            background-color: #ff3270;
        }

        50% {
            background-color: #208bf1;
        }

        75% {
            background-color: #afe102;
        }

        100% {
            background-color: #fbd301;
        }
    }

    .dot:nth-child(5):before {
        z-index: 100;
        width: 45.5px;
        height: 45.5px;
        margin-left: -22.75px;
        margin-top: -22.75px;
        animation: dot-colors 4s ease infinite;
    }

    @keyframes dot-rotate-1 {
        0% {
            transform: rotate(-105deg);
        }

        100% {
            transform: rotate(270deg);
        }
    }

    .dot:nth-child(1) {
        animation: dot-rotate-1 4s 0s linear infinite;
    }

    .dot:nth-child(1):before {
        background-color: #ff3270;
        animation: dot-move 4s 0s ease infinite;
    }

    @keyframes dot-rotate-2 {
        0% {
            transform: rotate(-105deg);
        }

        100% {
            transform: rotate(270deg);
        }
    }

    .dot:nth-child(2) {
        animation: dot-rotate-2 4s 1s linear infinite;
    }

    .dot:nth-child(2):before {
        background-color: #208bf1;
        animation: dot-move 4s 1s ease infinite;
    }

    @keyframes dot-rotate-3 {
        0% {
            transform: rotate(-105deg);
        }

        100% {
            transform: rotate(270deg);
        }
    }

    .dot:nth-child(3) {
        animation: dot-rotate-3 4s 2s linear infinite;
    }

    .dot:nth-child(3):before {
        background-color: #afe102;
        animation: dot-move 4s 2s ease infinite;
    }

    @keyframes dot-rotate-4 {
        0% {
            transform: rotate(-105deg);
        }

        100% {
            transform: rotate(270deg);
        }
    }

    .dot:nth-child(4) {
        animation: dot-rotate-4 4s 3s linear infinite;
    }

    .dot:nth-child(4):before {
        background-color: #fbd301;
        animation: dot-move 4s 3s ease infinite;
    }

    #loder-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 1030;
    }
</style>
