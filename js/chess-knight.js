function chessKnight(cell) {
  let moves = 8;

  if (cell.charAt(0) === 'b' || cell.charAt(0) === 'g') {
    moves -= 2;
  }

  if (cell.charAt(1) === '2' || cell.charAt(1) === '7') {
    moves -= 2;
  }

  if (cell.charAt(0) === 'a' || cell.charAt(0) === 'h') {
    moves /= 2;
  }

  if (cell.charAt(1) === '1' || cell.charAt(1) === '8') {
    moves /= 2;
  }

  return moves;
}
