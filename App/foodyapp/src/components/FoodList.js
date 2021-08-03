import React from 'react';
import { FlatList, Text, View } from 'react-native';

const FoodList = () => {
    return(
        <View style={{paddingLeft: 20, paddingTop: 10}}>
            <Text style={{fontSize: 16}}>Most popular</Text>
            <FlatList 
            horizontal
            data={[1,2,4,6,7,4,21,3,2,12,3,4]}
            renderItem = { () => {return <Text>sdsd</Text>}}
        />
        </View>
    );
}

export default FoodList;