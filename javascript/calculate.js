calculate = (u) => {
    let x = /^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/gi;
    return u.match(x) !== null;
}
