
#!/bin/bash

if [ -e .env ]; then
    echo "WORK: Trying .env file."
else
    echo "ERROR: Create .env file from template."
    exit 1
fi



. .env

if [ ! "$(docker ps -q -f name=$VIRTUAL_HOST_CONTAINER_NAME)" ]; then

    echo "WORK: Virtual host '$VIRTUAL_HOST_CONTAINER_NAME' does not exist."

    docker-compose up -d
        STARTED=$(docker inspect --format="{{.State.StartedAt}}" $VIRTUAL_HOST_CONTAINER_NAME)
        NETWORK=$(docker inspect --format="{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}" $VIRTUAL_HOST_CONTAINER_NAME)

    echo "OK - $VIRTUAL_HOST_CONTAINER_NAME is running. IP: $NETWORK, StartedAt: $STARTED"


            CUT_VIRTUAL_HOST=${VIRTUAL_HOST//,/ }
                   for CUT_ETC_HOSTS in ${CUT_VIRTUAL_HOST[@]}
            do
                   ETC_HOSTS="$ETC_HOSTS $(echo "$CUT_ETC_HOSTS" |cut -d: -f1 )"
            done


    echo "127.0.0.1 $ETC_HOSTS " | sudo tee -a /etc/hosts

fi

docker exec -it $VIRTUAL_HOST_CONTAINER_NAME bash
exit 0
