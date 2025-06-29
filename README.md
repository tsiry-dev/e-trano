# e-trano
Site immobilier



users → houses : 1-to-many (un propriétaire possède plusieurs maisons)

houses → reservations : 1-to-many

users → reservations : 1-to-many (un client peut réserver plusieurs maisons)

users → subscriptions : 1-to-1 ou 1-to-many selon modèle

houses → images, reviews, features : 1-to-many