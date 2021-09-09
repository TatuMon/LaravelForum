describe('My very first test', () => {
    beforeEach(() => cy.visit('http://192.168.0.55'));

    it('Checks that the title is correct', () => {
        cy.title('include', 'Good Mambo');
    })

    it('Search for string', () => {
        cy.get('.search').type('Upti');
        cy.get('.search-form').submit();
    })
})