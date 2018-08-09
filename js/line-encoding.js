function lineEncoding(str) {
  const encodings = [];
  let startOfGroup = 0;
  
  for (let i = 0; i < str.length; i++) {
    if (str[i] !== str[i + 1]) {
      const groupLength = str.slice(startOfGroup, i + 1).length;
      if (groupLength > 1) {
        encodings.push(groupLength + str[i]);
      } else {
        encodings.push(str[i]);
      }
      
      startOfGroup = i + 1;
    }
  }
  
  return encodings.join('');
}