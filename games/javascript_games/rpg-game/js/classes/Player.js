class Player {
    constructor(x, y, size) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.speed = 5;

        // Sprites for different actions
        this.sprites = {
            idle: this.loadImage("assets/images/player_idle.png"),
            walk: [
                this.loadImage("assets/images/player_walk_1.webp"),
                this.loadImage("assets/images/player_walk_2.webp"),
                this.loadImage("assets/images/player_walk_3.webp"),
            ],
            attack: this.loadImage("assets/images/player_attack.webp"),
        };

        this.currentAction = "idle"; // Default action
        this.animationFrame = 0;
        this.frameDelay = 10; // Delay between frames
        this.frameCounter = 0;
    }

    loadImage(src) {
        const img = new Image();
        img.src = src;
        return img;
    }

    move(direction) {
        this.currentAction = "walk";
        switch (direction) {
            case "ArrowUp":
                this.y -= this.speed;
                break;
            case "ArrowDown":
                this.y += this.speed;
                break;
            case "ArrowLeft":
                this.x -= this.speed;
                break;
            case "ArrowRight":
                this.x += this.speed;
                break;
        }
    }

    attack() {
        this.currentAction = "attack";
    }

    update() {
        // Handle animation frame progression
        this.frameCounter++;
        if (this.frameCounter >= this.frameDelay) {
            this.animationFrame++;
            this.frameCounter = 0;
            if (this.currentAction === "walk" && this.animationFrame >= this.sprites.walk.length) {
                this.animationFrame = 0;
            } else if (this.currentAction === "attack") {
                this.animationFrame = 0;
                this.currentAction = "idle"; // Reset to idle after attack
            }
        }
    }

    draw(context) {
        let sprite;
        if (this.currentAction === "walk") {
            sprite = this.sprites.walk[this.animationFrame % this.sprites.walk.length];
        } else {
            sprite = this.sprites[this.currentAction];
        }

        context.drawImage(sprite, this.x, this.y, this.size, this.size);
    }
}
