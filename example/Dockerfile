FROM node:16

WORKDIR /var/www
COPY package.json package-lock.json /var/www/

RUN npm install -g

RUN chown -Rh node:node /var/www

USER node

EXPOSE 3000

CMD [ "sh", "-c", "npm install && npm run start" ]