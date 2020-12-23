describe('Homepage', () => {
    beforeEach(function () {
        cy.visit('/')
    })

    it('Visits the homepage', () => {
        cy.contains('Start Bootstrap')
    })

    it('Clicks the blog page', () => {
        cy.get('ul.navbar-nav').contains('Blog').click()
        cy.url().should('include', '/blog')
    })

    it('Clicks the demo page', () => {
        cy.get('ul.navbar-nav').contains('Demo').click()
        cy.url().should('include', '/demo')
    })
})
