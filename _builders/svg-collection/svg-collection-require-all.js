/**
 *
 * Ce fichier appelé depuis webpack importe tous les fichiers svg
 *
 */
function requireAll(r) {
    r.keys().forEach(r);
}
console.log("svg-collection-require-all.js")
//setTimeout(function(){
    requireAll(
        require.context('../../project', true, /svg-collection-(.*)\/(.*)\.svg$/)
    );
requireAll(
    require.context('../../vendor', true, /svg-collection-(.*)\/(.*)\.svg$/)
);
//},1000 * 5);


