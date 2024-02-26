Array.prototype.rotate = function(n) {
    var len = this.length;
    return !(n % len) ? this
        : n > 0 ? this.map((e,i,a) => a[(i + n) % len])
            : this.map((e,i,a) => a[(len - (len - i - n) % len) % len]);
};

String.prototype.diff = function(s) {

    var getBaseIndex = function(s,l){ // returns the index of first mismatching character
            var i = 0;
            while(s[i] === l[i] && i < s.length) ++i;
            return i;
        },

        findFirstChange = function(s,l){ // returns the first matching substring after base index
            var fi = len,
                substr = "",
                match = false,
                i = 0;
            while (!match && i < s.length) {
                s[i] !== l[i] ? ++i : match = !match;
            }
            match && (fi = i); // match starts from this index
            while (match && i < s.length) {
                s[i] === l[i] ? substr += s[i++] : match = !match;
            }
            return {bix: bi,    // base index : index of first mismaching character
                fis: fi,    // index of next re match in shorter string
                fil: fi,    // index of next re match in longer string (will be adjusted later)
                fss: substr // next matching substring after first mismatch
            };
        },

        isThisLonger = true; // true if the string designated by "this" is longer
    bi = getBaseIndex(this,s),
        matchStr = s.slice(0,bi), // the matching portion at the beginning
        long = this.length >= s.length ? (isThisLonger = true, [...this].slice(bi)) // converted to array as the
            : (isThisLonger = false, [...s].slice(bi)),  // long string gets rotated
        short = isThisLonger ? s.slice(bi) : this.slice(bi),
        len = long.length,
        substrings = [],
        cd = {}, // change data !! important
        change = [], // holds deleted and inserted substrings at indices 0 and 1
        nextThis = "", // remaining part of old string to feed recursive call
        nextS = "", // remaining part of new string to feed recursive call
        result = ""; // the glorious result

    for (var rc = 0; rc < len; rc++){ // rc -> rotate count
        cd = findFirstChange(short,long.rotate(rc)); // collect change indices
        cd.fil = rc < len - cd.fis ? cd.fil + rc : cd.fis + len - rc;   // adjusted for index of next re match in longer string
        substrings.push(cd);
    }
    cd = !!substrings.length && substrings.sort((a,b) => b.fss.length - a.fss.length || a.fis - b.fis || b.fil - a.fil )[0];
    long = long.join("");
    if (cd) {
        change   = isThisLonger ? [long.slice(0,cd.fil), short.slice(0,cd.fis)]
            : [short.slice(0,cd.fis), long.slice(0,cd.fil)];
        nextThis = isThisLonger ? long.slice(cd.fil) : short.slice(cd.fis);
        nextS    = isThisLonger ? short.slice(cd.fis) : long.slice(cd.fil);
        change[0] = change[0] && ('<span class = "deleted">' + change[0] + '</span>');
        change[1] = change[1] && ('<span class = "inserted">' + change[1] + '</span>');
        result = matchStr + change[0] + change[1];
    } else result = this;
    result += (nextThis !== "" || nextS !== "") ? nextThis.diff(nextS) : "";
    return result;
};
