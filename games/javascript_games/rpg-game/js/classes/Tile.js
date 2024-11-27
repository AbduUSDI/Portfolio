class Tile {
    constructor(x, y, size, type) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.type = type; // "grass", "water", etc.
    }

    draw(context) {
        context.fillStyle = this.type === "grass" ? "green" : "blue";
        context.fillRect(this.x, this.y, this.size, this.size);
    }
}
