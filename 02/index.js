const { KhmerDate } = require('./lib');

const date = new KhmerDate(new Date('2021-01-25T21:30:15.330Z'))

console.log(date.getDate())