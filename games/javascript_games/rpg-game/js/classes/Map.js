class Map {
    constructor(rows, cols, tileSize) {
        this.rows = rows;
        this.cols = cols;
        this.tileSize = tileSize;
        this.tiles = [];

        this.generateMap();
    }

    generateMap() {
        for (let row = 0; row < this.rows; row++) {
            const rowTiles = [];
            for (let col = 0; col < this.cols; col++) {
                const type = Math.random() > 0.7 ? "water" : "grass";
                rowTiles.push(new Tile(col * this.tileSize, row * this.tileSize, this.tileSize, type));
            }
            this.tiles.push(rowTiles);
        }
    }

    draw(context) {
        for (let row of this.tiles) {
            for (let tile of row) {
                tile.draw(context);
            }
        }
    }
}
