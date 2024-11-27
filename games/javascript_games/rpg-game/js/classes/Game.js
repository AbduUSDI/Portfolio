class Game {
    constructor(canvasId) {
        this.canvas = document.getElementById(canvasId);
        this.context = this.canvas.getContext("2d");
        this.map = new Map(12, 16, 50);
        this.player = new Player(100, 100, 40);

        this.setupKeyboardControls();
    }

    setupKeyboardControls() {
        window.addEventListener("keydown", (e) => {
            if (["ArrowUp", "ArrowDown", "ArrowLeft", "ArrowRight"].includes(e.key)) {
                this.player.move(e.key);
            } else if (e.key === " ") {
                this.player.attack();
            }
        });

        window.addEventListener("keyup", (e) => {
            if (["ArrowUp", "ArrowDown", "ArrowLeft", "ArrowRight"].includes(e.key)) {
                this.player.currentAction = "idle"; // Reset to idle on key release
            }
        });
    }

    update() {
        this.player.update();
    }

    draw() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.map.draw(this.context);
        this.player.draw(this.context);
    }

    loop() {
        this.update();
        this.draw();
        requestAnimationFrame(() => this.loop());
    }

    start() {
        this.loop();
    }
}
